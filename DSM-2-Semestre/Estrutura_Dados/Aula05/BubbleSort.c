#include <stdio.h>

void bubbleSort(int vetor[], int tamanho)
{
    for (int i=0; i < tamanho - 1; i++){
        for (int j = 0;j < tamanho - i - 1; j++) {
            if (vetor[j] > vetor [j+ 1]){
                int temp = vetor[j];
                vetor[j] = vetor[j + 1];
                vetor[j+ 1] = temp;
            }
        }
    }
}

int main()
{
    int vetor[5] = {8, 4, 5, 9, 1};
    int i;
    int tamanho = 5;
    
    bubbleSort(vetor, tamanho);
    
    for (i = 0; i < tamanho; i++){
        printf("%d", vetor[i]);
    }
    
    return 0;
}