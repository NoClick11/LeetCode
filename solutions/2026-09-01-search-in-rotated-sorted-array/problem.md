# Busca em Array Rotacionado

**Problema original:** Search in Rotated Sorted Array
**Fonte:** https://leetcode.com/problems/search-in-rotated-sorted-array/

## Enunciado

Voce recebe um array de inteiros ordenado de forma crescente, mas que foi rotacionado em um ponto desconhecido antes de comecar (por exemplo, [0,1,2,4,5,6,7] pode virar [4,5,6,7,0,1,2]). Todos os valores do array sao unicos. Dado esse array rotacionado e um valor target, retorne o indice de target no array, ou -1 caso ele nao esteja presente. A solucao deve rodar em tempo O(log n).

## Exemplos

Exemplo 1:
Entrada: nums = [4,5,6,7,0,1,2], target = 0
Saida: 4

Exemplo 2:
Entrada: nums = [4,5,6,7,0,1,2], target = 3
Saida: -1

## Restricoes

- 1 <= nums.length <= 5000
- -10^4 <= nums[i] <= 10^4
- Todos os valores de nums sao unicos
- nums e originalmente um array ordenado que foi rotacionado entre 0 e n-1 posicoes
- -10^4 <= target <= 10^4
