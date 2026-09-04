# Ciclo em Lista Encadeada

Fonte original: https://leetcode.com/problems/linked-list-cycle/

Dado o nó inicial (head) de uma lista encadeada simples, determine se ela contém um ciclo — ou seja, se em algum ponto um nó aponta de volta para um nó já visitado anteriormente, formando um laço que nunca termina.

## Exemplo 1
Entrada: lista com os valores 3 -> 2 -> 0 -> -4, onde o último nó (-4) aponta de volta para o nó de valor 2 (segunda posição da lista).
Saída: true
Explicação: seguindo os ponteiros a partir do head, eventualmente se volta a visitar o nó de valor 2, formando um ciclo.

## Exemplo 2
Entrada: lista com os valores 1 -> 2, sem nenhum nó apontando de volta para outro já visitado.
Saída: false
Explicação: percorrendo a lista chega-se ao final (o último nó aponta para null) sem repetir nenhum nó.

## Restrições
- O número de nós na lista está entre 0 e 10^4.
- O valor de cada nó está entre -10^5 e 10^5.
- A solução deve rodar em tempo O(n) e, idealmente, usar memória O(1), sem estruturas auxiliares para marcar nós visitados.
