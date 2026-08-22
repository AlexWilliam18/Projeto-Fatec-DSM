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
        printf("\n[%d][%d][%d]", matriz2d[linha][0],matriz2d[linha][1],matriz2d[linha][2]);;
    } // fim do for da linha

    return 0;
}