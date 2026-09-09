<?php

function canJump(array $nums): bool {
    $maxReach = 0;
    $n = count($nums);
    for ($i = 0; $i < $n; $i++) {
        if ($i > $maxReach) {
            return false;
        }
        $maxReach = max($maxReach, $i + $nums[$i]);
        if ($maxReach >= $n - 1) {
            return true;
        }
    }
    return true;
}
