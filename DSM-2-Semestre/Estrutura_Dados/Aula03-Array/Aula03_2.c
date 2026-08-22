#include <stdio.h>

int main()
{
    int array[13];

    int i; // a variavel i remete a index (indice)

    //a estrutura de repetição for irá iniciar o indice em 0; verificar se o contéudo 
    // condiz com a comparação e se condizer entra no laço após o incremento
    // (aumentar o valor do indice) :
    for(i = 0; i < 13; i++)
    {
        printf("Entre com um número inteiro: ");
        scanf("%d", &array[i]);
    }

    printf("Conteúdo dos indices 6 e 13: %d - %d", array[6], array[12]);

    return 0;
}