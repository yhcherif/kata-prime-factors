<?php

class PrimeFactors {

    public function generate($number)
    {
        $result = [];
        $divider = 2;
        
        while ($number > 1)
        {
            while ($number % $divider == 0)
            {
                $result[] = $divider;
                $number /= $divider;
            }
            $divider += 1;
        }

        return $result;
    }
}
