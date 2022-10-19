#include<stdio.h>

int heapSize = 0;

struct MinHeap {
    int elements[100];
};

void swap(int heap[], int currentNodeIndex, int parentNodeIndex) {
    int temp = heap[currentNodeIndex];

    heap[currentNodeIndex] = heap[parentNodeIndex];
    heap[parentNodeIndex] = temp;
}

void heapfyUp(int heap[], int position)
{
    if (position <= 1) {
        return;
    }

    int currentNodeIndex = position;
    int parentNodeIndex = position/2;

    int currentNode = heap[currentNodeIndex];
    int parentNode = heap[parentNodeIndex];

    if (currentNode >= parentNode) {
        return;
    }

    swap(heap, currentNodeIndex, parentNodeIndex);

    heapfyUp(heap, parentNodeIndex);
}

/*
    Complexidade: O(log n)

    Toda Heap Binária é uma Árvore Binária Completa (ABC). Ao observarmos o comportanto da altura (h)
    de uma ABC, percebemos que h é sempre igual ao piso de log n, sendo n o número de nós da árvore.

    n  h
    ----
    0  0
    1  0
    2  1
    3  2
    ...
    7  2

    Ná análise do pior caso, a inseçao em uma Heap Binária Mínima pode exigir que toda a altura da árvore 
    seja percorrida até que o nó inserido esteja na posiçao que satisfaça a propriedade dessa estrutura (os
    elementos de menor valor mais acima e os de maior valor mais abaixo). Por esse motivo, dizemos que a 
    complexidade do algoritmo de inserçao é O(log n).
*/
void insert(int heap[], int valor) 
{
    heap[++heapSize] = valor;

    heapfyUp(heap, heapSize);
}

void traverseRecursively(int heap[], int index) {

    if (index > heapSize) {
        return;
    }

    printf("%d ", heap[index]);

    traverseRecursively(heap, ++index);
}

void traverse(int heap[]) {

    printf("Heap elements: \n");

    if (heapSize == 0) {
        return;
    }

    int firstIndex = 1;

    traverseRecursively(heap, firstIndex);
}

int main()
{
    struct MinHeap heap;

    insert(heap.elements, 20);
    insert(heap.elements, 5);
    insert(heap.elements, 3);
    insert(heap.elements, 4);

    traverse(heap.elements);
}