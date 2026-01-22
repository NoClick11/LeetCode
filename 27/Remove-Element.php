<?php
class Solution {

    /**
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    function removeElement(&$nums, $val) {
        $nums = array_filter($nums, function($item) use ($val) {
            return $item !== $val;
        });
        return count($nums);
    }
    
}