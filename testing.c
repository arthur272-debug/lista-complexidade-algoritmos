#include<stdio.h>

int i = 0;

void randonFunction() {
    i++;
}

int main() {

    printf("%d", i);

    randonFunction();

    printf("%d", i);
}