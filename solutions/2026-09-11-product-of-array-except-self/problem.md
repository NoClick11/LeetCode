# Product of Array Except Self

Fonte original: https://leetcode.com/problems/product-of-array-except-self/

## Enunciado (reescrito)

Dado um array de números inteiros `nums` de tamanho `n`, retorne um array `resultado` onde `resultado[i]` é igual ao produto de todos os elementos de `nums` exceto `nums[i]`.

O algoritmo deve rodar em tempo O(n) e não pode usar o operador de divisão. Além disso, o array de saída não é considerado espaço extra para efeitos de análise de espaço (mas idealmente a solução deve evitar espaço auxiliar O(n) além do array de resultado).

## Exemplos

Exemplo 1:
Entrada: nums = [1, 2, 3, 4]
Saída: [24, 12, 8, 6]
Explicação: resultado[0] = 2*3*4 = 24, resultado[1] = 1*3*4 = 12, resultado[2] = 1*2*4 = 8, resultado[3] = 1*2*3 = 6.

Exemplo 2:
Entrada: nums = [-1, 1, 0, -3, 3]
Saída: [0, 0, 9, 0, 0]
Explicação: como existe um zero no array, todas as posições exceto a do próprio zero resultam em 0, e a posição do zero recebe o produto dos demais elementos (-1*1*-3*3 = 9).

## Restrições

- 2 <= nums.length <= 10^5
- -30 <= nums[i] <= 30
- O produto de qualquer prefixo ou sufixo de nums cabe em um inteiro de 32 bits
- Não é permitido usar o operador de divisão
- A solução deve rodar em O(n) de tempo

