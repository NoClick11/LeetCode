# Two Sum

**Fonte:** https://leetcode.com/problems/two-sum/

Dado um array de inteiros `nums` e um inteiro alvo `target`, encontre os indices de dois numeros do array cuja soma seja igual a `target`. Assuma que cada entrada tem exatamente uma solucao, e o mesmo elemento nao pode ser usado duas vezes. A resposta pode ser retornada em qualquer ordem.

## Exemplo 1
Entrada: nums = [2, 7, 11, 15], target = 9
Saida: [0, 1]
Explicacao: nums[0] + nums[1] == 9

## Exemplo 2
Entrada: nums = [3, 2, 4], target = 6
Saida: [1, 2]
Explicacao: nums[1] + nums[2] == 6

## Restricoes
- 2 <= nums.length <= 10^4
- -10^9 <= nums[i] <= 10^9
- -10^9 <= target <= 10^9
- Existe exatamente uma solucao valida

