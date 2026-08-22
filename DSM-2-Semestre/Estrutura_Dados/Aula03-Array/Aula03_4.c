#include <stdio.h> // Salvem como array4.c

int main()
{
    int array[10];
    // Irei declarar o i dentro do for, dependendo da
    // versão do compilador Cc pode ocorrer erro de alocação
    // de memória, mas isso não não é comum

    for(int i = 0; i < 10; i++)
    {
        printf("Entre com o valor da posição %d: ", (i+1));
        scanf("%d", &array[i]);
    }
    for(int i = 0; i < 10; i++)
    {
        if((i % 1) == 0){
            printf("Valor %d esta num indice par", array[i + 1]);
        }
    }
    return 0;
}