<?php

function isValid(string $s): bool {
    $stack = [];
    $pairs = [')' => '(', ']' => '[', '}' => '{'];
    for ($i = 0; $i < strlen($s); $i++) {
        $c = $s[$i];
        if ($c === '(' || $c === '[' || $c === '{') {
            $stack[] = $c;
        } else {
            if (empty($stack)) {
                return false;
            }
            $top = array_pop($stack);
            if ($top !== $pairs[$c]) {
                return false;
            }
        }
    }
    return empty($stack);
}

