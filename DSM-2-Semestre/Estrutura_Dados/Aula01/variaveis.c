#include <stdio.h>

int main()
{
    char nome[3];
    int anoNasc = 0, anoAtual = 0;

    printf("Digite seu nome: ");
    scanf("%s", nome);
    printf("Digte o ano atual: ");
    scanf("%d", &anoAtual);
    printf("Digite o ano de nascimento: ");
    scanf("%d", &anoNasc);

    int idade = anoAtual - anoNasc;

    printf("%s", nome);
    printf(" %d", idade);

    return 0;
}