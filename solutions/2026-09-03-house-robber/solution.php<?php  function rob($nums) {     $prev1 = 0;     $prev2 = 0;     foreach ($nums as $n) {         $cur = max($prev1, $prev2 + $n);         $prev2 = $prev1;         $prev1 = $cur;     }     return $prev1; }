<?php

function rob($nums) {
    $prev1 = 0;
    $prev2 = 0;
    foreach ($nums as $n) {
        $cur = max($prev1, $prev2 + $n);
        $prev2 = $prev1;
        $prev1 = $cur;
    }
    return $prev1;
}
