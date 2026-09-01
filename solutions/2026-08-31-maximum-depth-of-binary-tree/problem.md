## Maximum Depth of Binary Tree

Fonte original: https://leetcode.com/problems/maximum-depth-of-binary-tree/

Dada a raiz de uma arvore binaria, retorne sua profundidade maxima, ou seja, o numero de nos no caminho mais longo da raiz ate a folha mais distante.

### Exemplo 1
Entrada: root = [3,9,20,null,null,15,7]
Saida: 3
Explicacao: a arvore tem raiz 3, com filhos 9 e 20; 20 tem filhos 15 e 7. O caminho mais longo (3 -> 20 -> 15) tem 3 nos.

### Exemplo 2
Entrada: root = [1,null,2]
Saida: 2
Explicacao: a arvore e uma lista encadeada para a direita (1 -> 2), profundidade 2.

### Restricoes
- O numero de nos esta entre 0 e 10^4.
- -100 <= Node.val <= 100
- A arvore e representada por nos com valor, filho esquerdo e filho direito (podendo ser nulos).
