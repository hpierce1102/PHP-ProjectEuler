<?php

namespace App;

class Problem {
    public function __construct()
    {

    }

    /**
     * Sums the digits of the number resulting from 2^$power
     *
     * @param $power int
     * @return int
     */
    public static function getPowerDigitSum($power)
    {
        $power = (string) gmp_pow(2, $power);
        $sum = 0;

        for($i = 0; $i < strlen($power); $i++){
            $sum += $power[$i];
        }

        return $sum;
    }
}