# House Robber

Fonte original: https://leetcode.com/problems/house-robber/

Você é um assaltante planejando roubar casas ao longo de uma rua. Cada casa guarda uma quantia em dinheiro, mas duas casas adjacentes na lista compartilham o mesmo sistema de alarme: se ambas forem roubadas na mesma noite, o alarme dispara.

Dado um array de inteiros não negativos representando o valor guardado em cada casa, determine o valor máximo que pode ser roubado em uma única noite sem roubar duas casas adjacentes.

## Exemplos

Exemplo 1:
Entrada: nums = [1,2,3,1]
Saída: 4
Explicação: Roubar a casa de índice 0 (valor 1) e a de índice 2 (valor 3): 1 + 3 = 4.

Exemplo 2:
Entrada: nums = [2,7,9,3,1]
Saída: 12
Explicação: Roubar as casas de índices 0, 2 e 4 (valores 2, 9 e 1): 2 + 9 + 1 = 12.

## Restrições

- 1 <= nums.length <= 100
- 0 <= nums[i] <= 400
