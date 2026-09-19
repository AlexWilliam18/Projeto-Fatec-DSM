#include <stdio.h>
#include <string.h>

// Ao terminar pesquise sobre ASCII ART
int main()
{
    char nomes[5][20] = {
        "Bulbasaur",
        "Charmander",
        "Squirtle",
        "Pikachu",
        "Snorlax"
    };
    
    char tipos[5][20] = {
        "Grama / Venenoso",
        "Fogo",
        "Agua",
        "Eletrico",
        "Normal"
    };
    int escolha;
    
    printf("= POKEDEX SIMPLES (1 a 5) =\n");
    printf("Escolha o número do Pokemon que deseja consultar:\n");
    printf("1. Bulbasaur\n");
    printf("2. Charmander\n");
    printf("3. Squirtle\n");
    printf("4. Pikachu\n");
    printf("5. Snorlax\n");
    printf("Digite sua opção: ");
    scanf("%d", &escolha);
    
    if (escolha >= 1 && escolha <= 5) {
        
        printf("\n--- Informações do Pokemon ---\n");
        printf("Nome: %s\n", nomes[escolha - 1]);
        printf("Tipo: %s\n", tipos[escolha - 1]);
    } else {
        printf("\nOpção inválida! Escolha um número entre 1 e 5.\n");
    }

    return 0;
} // fim