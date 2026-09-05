#include <stdio.h>
int main()
{
    // float matrizMenu[10][4];
    int op = 1, linha = 0, qtdItens = 0;

    printf("\n Escolha a quantidade de itens que vai pegar do cardápio: ");
    scanf("%d", &qtdItens);
    float matrizMenu[qtdItens][4];

    while(op > 0)
    {
        if(linha <= qtdItens)
        {
            printf("\n----------------------------\n");
            printf("\n----- MENU LANCHO NETO -----\n");
            printf("\n ----- ITEM ------- VLR ---- \n");
            printf("\n -- 1: Coca cola  -- R$ 6,50-  \n");
            printf("\n -- 2: X Salada  -- R$ 27,50-  \n");
            printf("\n -- 3: Paçoquita --  R$ 2,00-  \n");
            printf("\n -- 4: Pão de queijo -- R$ 5,00- \n");
            printf("\n Escolha o item pelo numero ou 0 para sair: ");
            scanf("%d", &op);
        }

        switch(op)
        {
            case 1: // Caso 1
                matrizMenu[linha][0] = 1;
                matrizMenu[linha][1] = 6.50;
                printf("\n Quantas coca colas você deseja: ");
                scanf("%f", &matrizMenu[linha][2]);
                matrizMenu[linha][3] = matrizMenu[linha][1] * matrizMenu[linha][2];
                linha++;
            break; // Fim do Caso 1
    
            case 2: // Caso 2
                matrizMenu[linha][0] = 2;
                matrizMenu[linha][1] = 27.50;
                printf("\n Quantas X Saladas você deseja: ");
                scanf("%f", &matrizMenu[linha][2]);
                matrizMenu[linha][3] = matrizMenu[linha][1] * matrizMenu[linha][2];
                linha++;
            break; // Fim do Caso 2

            case 3: // Caso 3
                matrizMenu[linha][0] = 3;
                matrizMenu[linha][1] = 2;
                printf("\n Quantas paçoquitas você deseja: ");
                scanf("%f", &matrizMenu[linha][2]);
                matrizMenu[linha][3] = matrizMenu[linha][1] * matrizMenu[linha][2];
                linha++;
            break; // Fim do Caso 3

            case 4: // Caso 4
                matrizMenu[linha][0] = 4;
                matrizMenu[linha][1] = 5;
                printf("\n Quantos paes de queijo você deseja: ");
                scanf("%f", &matrizMenu[linha][2]);
                matrizMenu[linha][3] = matrizMenu[linha][1] * matrizMenu[linha][2];
                linha++;
            break; // Fim do Caso 4

            default: // Default
                printf("\n Escolha uma opção válida! ");
            break; // Fim do Default
        }

    }
    for(linha = 0; linha < qtdItens; linha++)
    {
        printf("\n|%.2f  | R$ %.2f  | %.2f  | R$ %.2f|", matrizMenu[linha][0], matrizMenu[linha][1],
            matrizMenu[linha][2], matrizMenu[linha][3]);
    }


    return 0;
}// Fim do main