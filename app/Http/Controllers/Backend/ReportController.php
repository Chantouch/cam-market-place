<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\HashidsManager;

class ReportController extends Controller
{
	public $hashid;

    /**
     * ProductController constructor.
     * @param HashidsManager $hashid
     */
    public function __construct(HashidsManager $hashid)
    {
        $this->hashid = $hashid;
        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function auth()
    {
        return auth()->guard('admin')->user();
    }

    //Report Sale
    public function index()
    {
    	$report = DB::table("purchases")
    					->join("purchase_orders","purchase_orders.purchase_id","=","purchases.id")
    					->join("products","products.id","=","purchase_orders.product_id")
    					->where("purchases.status","=",4)
    					->where("products.user_id","=",$this->auth()->id)
    					->select(DB::raw("date(purchases.updated_at) as DateSale"),
    						DB::raw("dayname(purchases.updated_at) as Day"),
    						DB::raw("monthname(purchases.updated_at) as MonthName"),
    						DB::raw("sum(purchase_orders.qty) as TotalQty"),
    						DB::raw("sum((if(discount_type is null,Price,case when products.discount_type=1 then Price-Discount else ((Price*Discount)/100) end)) * (purchase_orders.qty)) as TotalPrice"),
    						DB::raw("year(purchases.updated_at) as Year"))
    					->groupBy(DB::raw("date(purchases.updated_at)"),
    						DB::raw("dayname(purchases.updated_at)"),
    						DB::raw("monthname(purchases.updated_at)"),
    						DB::raw("year(purchases.updated_at)"))
    					->orderBy(DB::raw("date(purchases.updated_at)"),"DESC")
    					->get();
    
    	return view('backend.report.index',compact('report'));
    }

    public function show_detail($date){
    	$detail = DB::table("purchases")
    					->join("purchase_orders","purchase_orders.purchase_id","=","purchases.id")
    					->join("products","products.id","=","purchase_orders.product_id")
    					->join(DB::raw("(select products.id,group_concat(categories.name order by categories.name DESC) as CateName from products 
							join products_categories on products_categories.product_id=products.id
							join categories on categories.id=products_categories.category_id
							group by products.id) as tblC"),function($join){
    						$join->on("tblC.id","=","products.id");
    					})->where("purchases.status","=",4)
    					->where("products.user_id","=",$this->auth()->id)
    					->where(DB::raw("date(purchases.updated_at)"),"=",$date)
    					->select(DB::raw("((if(discount_type is null,Price,case when products.discount_type=1 then Price-Discount else ((Price*Discount)/100) end)) * purchase_orders.qty) as TotalPrice"),
    						"purchases.updated_at","products.code","purchase_orders.product_id","products.name",
    						"purchase_orders.qty as TotalQty","tblC.CateName")
    					->get();
    	return view('backend.report.detail',compact('detail','date'));
    }
}
