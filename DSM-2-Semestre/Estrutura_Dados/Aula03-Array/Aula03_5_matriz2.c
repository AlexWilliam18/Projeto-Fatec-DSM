#include <stdio.h> // Salvem como matriz1.c

int main()
{
    int matriz2d[3][3];
    for(int linha = 0; linha < 3; linha++)
    {
        for(int col = 0; col < 3; col++)
        {
            printf("Entre com o valor: ");
            scanf("%d", &matriz2d[linha][col]);
        } // fim do for da coluna
    } // fim do for da linha
    for(int linha = 0; linha < 3; linha++)
    {
        for(int col = 0; col < 3; col++)
        {
            if(linha == col){
                printf("[%d]", matriz2d[linha][col]);
            }
        }
    } // fim do for da linha

    return 0;
}