#include <stdio.h>

int main()
{
    int vet[] = {64, 25, 12, 22, 11};
    int n = 5;
    
    
    printf("\nArray original: ");
    for (int i = 0; i < n; i++) {
        printf("%d ", vet[i]);
    }
    for (int i = 0; i < n - 1; i++){
        int min_idx = i;
        for (int j = i + 1; j < n; j++) {
            if (vet[j] < vet[min_idx]) {
                min_idx = j;
            }
        }
        if (min_idx != i) {
            int temp = vet[i];
            vet[i] = vet[min_idx];
            vet[min_idx] = temp;
        }
    }
    printf("\nArray ordenado: ");
    for (int i = 0; i < n; i++) {
        printf("%d ", vet[i]);
    }

    return 0;
} // fim