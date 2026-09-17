# Generate Parentheses

Fonte original: [LeetCode - Generate Parentheses](https://leetcode.com/problems/generate-parentheses/)

## Enunciado

Dado um número inteiro `n` que representa a quantidade de pares de parênteses, gere (e retorne) todas as combinações possíveis de parênteses que sejam válidas, ou seja, em que cada parêntese aberto tenha um fechamento correspondente e a ordem nunca deixe um fechamento "sobrando" antes de seu par de abertura.

## Exemplos

Exemplo 1:
Entrada: n = 3
Saída: ["((()))","(()())","(())()","()(())","()()()"]

Exemplo 2:
Entrada: n = 1
Saída: ["()"]

## Restrições

- 1 <= n <= 8
- O resultado deve conter apenas combinações válidas, sem repetição e sem parênteses fora de ordem.
- A solução deve gerar todas as combinações possíveis, não apenas uma.
