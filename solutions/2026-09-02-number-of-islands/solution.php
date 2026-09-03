<?php

function numIslands(array $grid): int {
    $rows = count($grid);
    if ($rows === 0) {
        return 0;
    }
    $cols = count($grid[0]);
    $islands = 0;

    $flood = function (int $r, int $c) use (&$flood, &$grid, $rows, $cols) {
        if ($r < 0 || $r >= $rows || $c < 0 || $c >= $cols) {
            return;
        }
        if ($grid[$r][$c] !== '1') {
            return;
        }
        $grid[$r][$c] = '0';
        $flood($r + 1, $c);
        $flood($r - 1, $c);
        $flood($r, $c + 1);
        $flood($r, $c - 1);
    };

    for ($r = 0; $r < $rows; $r++) {
        for ($c = 0; $c < $cols; $c++) {
            if ($grid[$r][$c] === '1') {
                $islands++;
                $flood($r, $c);
            }
        }
    }

    return $islands;
}
