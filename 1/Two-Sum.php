<?php

class Solution {
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target) {
        $map = []; // Criamos um mapa para guardar [valor => índice]

        foreach ($nums as $index => $value) {
            $complement = $target - $value;

            // Verificamos se o complemento já existe no nosso mapa
            if (array_key_exists($complement, $map)) {
                // Se existe, retornamos o índice do complemento e o índice atual
                return [$map[$complement], $index];
            }

            // Se não existe, guardamos o valor atual e seu índice no mapa
            $map[$value] = $index;
        }

        return []; // Retorna vazio caso não encontre (embora o problema garanta solução)
    }
}

// Teste
$solution = new Solution();
$nums = [1, 2, 3, 4, 5];
$target = 6;
print_r($solution->twoSum($nums, $target));