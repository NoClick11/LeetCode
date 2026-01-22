<?php
class Solution
{

    /**
     * @param string $s
     * @return boolean
     */
    function isValid($s)
    {
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        $pilha = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (array_key_exists($char, $map)) {
                $topElement = empty($pilha) ? '#' : array_pop($pilha);

                if ($topElement !== $map[$char]) {
                    return false;
                }
            } else {
                array_push($pilha, $char);
            }
        }
        return empty($pilha);
    }
}