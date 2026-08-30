# Parênteses Válidos

Fonte original: https://leetcode.com/problems/valid-parentheses/ (LeetCode #20)

## Enunciado

Dada uma string contendo apenas os caracteres (, ), {, }, [ e ], determine se a string é válida.

Uma string é considerada válida quando:
1. Cada parêntese, colchete ou chave de abertura tem um fechamento correspondente do mesmo tipo.
2. Os fechamentos ocorrem na ordem correta (o último aberto deve ser o primeiro a fechar).
3. Toda string vazia é considerada válida.

## Exemplos

Exemplo 1:
Entrada: s = "()[]{}"
Saída: true
Explicação: cada par abre e fecha corretamente, na ordem certa.

Exemplo 2:
Entrada: s = "(]"
Saída: false
Explicação: o ( é fechado por ], que é de um tipo diferente.

Exemplo 3:
Entrada: s = "([)]"
Saída: false
Explicação: os pares se cruzam; [ deveria ser fechado antes de ).

## Restrições

- 1 <= s.length <= 10^4
- s consiste apenas dos caracteres (){}[]

