<?php

namespace App\Utilities;

use DateTime;

class Date{

    public static function isWeekEnd(){

        //return date('N') >=6; //retourne le jour de la semaine s'il est superieu ou egal a 6 donc si c'est le weekend
        return (new DateTime)->format('N') >=6;
    }
}