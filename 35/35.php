<?php
class Solution
{

    /**
     * @param int[] $nums
     * @param integer $target
     * @return integer
     */
    function searchInsert($nums, $target)
    {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = floor($low + ($high - $low) / 2);

            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return $low;
    }
}