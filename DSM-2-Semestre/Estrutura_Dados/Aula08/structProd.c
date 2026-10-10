#include <stdio.h>
struct Produto {
    char nome[20];
    char marca[15];
    float preco;
};

int main()
{
    struct Produto prod;
    
    printf("\nDigite o nome do produto: ");
    scanf("%s", &prod.nome);
    printf("\nDigite a marca do produto: ");
    scanf("%s", &prod.marca);
    printf("\nDigite o preço do produto: ");
    scanf("%f", &prod.preco);
    
    printf("\nPRODUTO\n |%s     | %s    |RS %f", prod.nome,
     prod.marca, prod.preco);
    return 0;
} //fim do main