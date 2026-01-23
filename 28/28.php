<?php

class Solution {

    /**
     * @param string $haystack
     * @param string $needle
     * @return int
     */
    function strStr($haystack, $needle) {
        $total = strlen($haystack);
        $total1 = strlen($needle);
        
        for ($i = 0; $i < $total; $i++) {
            $substring = substr($haystack, $i, $total1);
            if ($substring == $needle) {
                return $i;
            } 
        }
        return -1;
    }
}