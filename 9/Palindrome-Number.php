<?php

class Solution
{

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x)
    {
        $xs = (string) $x;
        
        $reverso = strrev($xs);
        $reverso = (int) $reverso;

        return($reverso === $x) ? true : false;

    }
}