problema original: Number of Islands
fonte: https://leetcode.com/problems/number-of-islands/
tema: grafos (busca em profundidade / largura em matriz)

Você recebe uma matriz (grid) 2D composta por caracteres '1' (terra) e '0' (agua). Uma ilha e formada por celulas de terra conectadas horizontal ou verticalmente (nao diagonalmente), e esta cercada de agua em todos os outros lados. Assuma que todas as quatro bordas do grid estao cercadas por agua.

Sua tarefa e retornar o numero total de ilhas presentes no grid.

Exemplo 1:
entrada:
[
  ["1","1","1","1","0"],
  ["1","1","0","1","0"],
  ["1","1","0","0","0"],
  ["0","0","0","0","0"]
]
saida: 1

Exemplo 2:
entrada:
[
  ["1","1","0","0","0"],
  ["1","1","0","0","0"],
  ["0","0","1","0","0"],
  ["0","0","0","1","1"]
]
saida: 3

Restricoes:
- 1 <= numero de linhas, numero de colunas <= 300
- grid[i][j] e '0' ou '1'

