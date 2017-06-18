<?php

/**
 * User: Chantouch
 * Date: 17/03/2017
 * Time: 11:13 AM
 */
use Carbon\Carbon;

class Helper
{

    /**
     * @return array
     */
    public static function gender()
    {
        return [
            '0' => 'Both',
            '1' => 'Female',
            '2' => 'Male'
        ];
    }

    /**
     * @return array
     */
    public static function marital_status()
    {
        return [
            '0' => 'Both',
            '1' => 'Married',
            '2' => 'Single',
        ];
    }


    public static function discount_types()
    {
        return [
            '1' => 'Amount',
            '2' => 'Percentage'
        ];
    }

    //-------Show at the front end of user-----------------//

    /**
     * @param $status
     * @return string
     */
    public static function status($status)
    {
        if ($status == 0) {
            return "<span class=\"label label-danger\">Offline</span>";
        } elseif ($status == 1) {
            return "<span class=\"label label-success\">Online</span>";
        } elseif ($status == 2) {
            return "<span class=\"label label-info\">Filled Up</span>";
        } elseif ($status == 3) {
            return "<span class=\"label label-primary\">Draft</span>";
        } else {
            return "<span class=\"label label-danger\">Unpublished</span>";
        }
    }

    /**
     * @param $status
     * @return string
     */
    public static function show_marital($status)
    {
        if ($status == 0) {
            return "Both";
        }
        if ($status == 1) {
            return "Married";
        }
        if ($status == 2) {
            return "Single";
        } else {
            return "Others";
        }
    }


    /**
     * @param $gender
     * @return string
     */
    public static function show_gender($gender)
    {
        if ($gender == 0) {
            return "Both";
        }
        if ($gender == 1) {
            return "Female";
        }
        if ($gender == 2) {
            return "Male";
        } else {
            return "Others";
        }
    }

    /**
     * @param $date
     * @return string
     */
    public static function date_time_format($date)
    {
        return Carbon::parse($date)->format('D-d-M-Y H:i A');
    }


    /**
     * @param $model
     * @return string
     */
    public static function relationship($model)
    {
        if ($model == null) {
            return "Not Selected";
        } else {
            return $model->name;
        }
    }

    /**
     * @param $model
     * @return string
     */
    public static function currency($model)
    {
        if ($model == null) {
            return "Not Selected";
        } else {
            return $model->code;
        }
    }

    /**
     * @param $type
     * @param $model
     * @return string
     */
    public static function discount($type, $model)
    {
        if ($type == 1) {
            return self::currency($model);
        }
        if ($type == 2) {
            return "Percentage";
        }
        return "Default";
    }

    /**
     * @param $from_Currency
     * @param $to_Currency
     * @param $amount
     * @return string
     */
    public static function currencyConverterXe($from_Currency, $to_Currency, $amount)
    {
        $encode_amount = 1;
        $from_Currency = urlencode($from_Currency);
        $to_Currency = urlencode($to_Currency);
        $get = file_get_contents("http://www.xe.com/currencyconverter/convert/?Amount=$encode_amount&From=$from_Currency&To=$to_Currency");
        $get = explode("<span class='uccResultAmount'>", $get);
        $get = explode("</span>", $get[1]);
        $rate = preg_replace("/[^0-9\.]/", null, $get[0]);
        $rate = (float)$rate;
        $converted_amount = $amount * $rate;
        //$data = array('rate' => $rate, 'converted_amount' => $converted_amount, 'from_Currency' => strtoupper($from_Currency), 'to_Currency' => strtoupper($to_Currency));
        return json_encode($converted_amount, true);
    }
}