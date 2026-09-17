<?php
function generateParenthesis(int $n): array {
    $result = [];
    generateParenthesisHelper($n, $n, '', $result);
    return $result;
}

function generateParenthesisHelper(int $open, int $close, string $current, array &$result): void {
    if ($open === 0 && $close === 0) {
        $result[] = $current;
        return;
    }
    if ($open > 0) {
        generateParenthesisHelper($open - 1, $close, $current . '(', $result);
    }
    if ($close > $open) {
        generateParenthesisHelper($open, $close - 1, $current . ')', $result);
    }
}
