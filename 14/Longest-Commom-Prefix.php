<?php

class Solution
{

    /**
     * @param string[] $strs
     * @return string
     */
    function longestCommonPrefix($strs)
    {
        $total = count($strs);
        $prefix = $strs[0];

        for ($i = 0; $i < $total; $i++) {

            while (strpos($strs[$i], $prefix) !== 0) {
                $prefix = substr($prefix, 0, -1);
                if ($prefix === "") return "";
            }
        }
        return $prefix;
    }
}