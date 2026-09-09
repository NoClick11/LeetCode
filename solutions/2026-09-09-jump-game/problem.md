# Jump Game

**Fonte:** https://leetcode.com/problems/jump-game/

## Enunciado

Você recebe um array de inteiros não negativos `nums`, onde cada elemento representa o número máximo de posições que você pode avançar a partir daquele índice. Você começa na posição 0 do array. Determine se é possível alcançar o último índice do array.

## Exemplo 1

Entrada: nums = [2,3,1,1,4]
Saída: true
Explicação: Salte 1 passo do índice 0 para o índice 1, depois salte 3 passos até o último índice.

## Exemplo 2

Entrada: nums = [3,2,1,0,4]
Saída: false
Explicação: Você sempre chegará ao índice 3, onde o valor máximo de salto é 0, o que te prende ali. O último índice fica inalcançável.

## Restrições

- 1 <= nums.length <= 10^4
- 0 <= nums[i] <= 10^5
