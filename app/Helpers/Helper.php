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
            '1' => '$',
            '2' => '%'
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
}