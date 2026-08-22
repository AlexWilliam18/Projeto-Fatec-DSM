#include <stdio.h>

int main()
{
    char nome [10];
    int anoNasc = 0, anoAtual = 0;

    printf("Digite seu nome: ");
    scanf("%s", nome);
    printf("Digite o ano atual: ");
    scanf("%d", &anoAtual);
    printf("Digite o ano de nascimento: ");
    scanf("%d", &anoNasc);

    int idade = anoAtual - anoNasc;

    if(idade >= 18)
    {
        printf("%s, você pode tirar CNH", nome); // o %s antes vai ser substituido por nome
    }
    else
    {
        printf("%s, você não pode tirar CNH porque tem %d anos", nome, idade);
    }

    return 0;
}