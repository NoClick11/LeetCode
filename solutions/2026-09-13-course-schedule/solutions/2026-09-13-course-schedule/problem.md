# Course Schedule

Fonte original: https://leetcode.com/problems/course-schedule/

## Enunciado (reescrito)

Existem `n` disciplinas numeradas de `0` a `n-1`. Algumas disciplinas possuem pré-requisitos, representados por uma lista de pares `[a, b]`, significando que para cursar a disciplina `a` é preciso ter cursado antes a disciplina `b`. Dado o número total de disciplinas `n` e a lista de pré-requisitos, determine se é possível cursar todas as disciplinas, ou seja, se não existe nenhum ciclo de dependências entre elas.

## Exemplos

Exemplo 1:
Entrada: n = 2, prerequisites = [[1,0]]
Saída: true
Explicação: existem 2 disciplinas. Para cursar a disciplina 1 é preciso cursar a 0 primeiro. Isso é possível: curse 0 e depois 1.

Exemplo 2:
Entrada: n = 2, prerequisites = [[1,0],[0,1]]
Saída: false
Explicação: para cursar 1 é preciso de 0, e para cursar 0 é preciso de 1 — um ciclo, então é impossível cursar ambas.

## Restrições

1 <= n <= 2000
0 <= prerequisites.length <= 5000
prerequisites[i].length == 2
0 <= a, b < n
Todos os pares [a, b] são distintos
