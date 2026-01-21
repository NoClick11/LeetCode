<?php

class Solution
{

    /**
     * @param string $s
     * @return int
     */
    function romanToInt($s)
    {
        $values = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $total = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            $currentValue = $values[$s[$i]];

            if ($i + 1 < $length) {
                if ($currentValue < $values[$s[$i + 1]]) {
                    $total -= $currentValue;
                } else {
                    $total += $currentValue;
                }
            } else {
                $total += $currentValue;
            }
        }
        return $total;
    }
}