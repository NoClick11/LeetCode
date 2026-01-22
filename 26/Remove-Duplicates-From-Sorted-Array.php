<?php
class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function removeDuplicates(&$nums)
    {
        $nums = array_values(array_unique($nums));
        return count($nums);
    }
}