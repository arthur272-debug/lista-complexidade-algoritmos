class NodoArvore:
    def __init__(self, chave=None, esquerda=None, direita=None):
        self.chave = chave
        self.esquerda = esquerda
        self.direita = direita

    def __repr__(self):
        return '%s <- %s -> %s' % (self.esquerda and self.esquerda.chave, self.chave, self.direita and self.direita.chave)
      
    def busca(raiz, chave):
    """Procura por uma chave em uma árvore binária de pesquisa."""

      if raiz is None:
        return None

      if raiz.chave == chave:
        return raiz
      
      if raiz.chave < chave:
        return busca(raiz.direita, chave)

      return busca(raiz.esquerda, chave)
    
# Complexidade: O(log n).
# Esse método de busca tem como complexidade o número de chamadas da função. No seu pior caso é a sua altura, que corresponde a log n, sendo n o número de nós da árvore.
# Comparando com o primeiro código, cuja complexidade é O(n²), sua performance se mostra mais eficiente, já que na escala de complexidade, log n está abaixo de n².
