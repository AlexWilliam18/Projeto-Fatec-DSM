#include <stdio.h>

int main()
{
    float peso, altura, imc;
    int categoria = 0;
    float limites[2] = {18.5, 25.0};
    
    char treinos[3][3][100] = { 
        {
            "Foco: Ganho de Massa Muscular",
            "Musculação: 3 a 4x por semana",
            "Aerobico: Leve (apenas aquecimento)"
        },
        {
            "Foco: Condicionamento Geral e Definição",
            "Musculação: 4 a 5x por semana",
            "Aeróbico: Moderado (pos-treino)"
        },
        {
            "Foco: Emagrecimento e Resistência",
            "Musculação: 4x por semana (circuito)",
            "Aeróbico: Alto (esteira ou bike)"
        }
    };
    
    printf("Digite seu peso (kg): ");
    scanf("%f", &peso);
    printf("Digite sua altura (m): ");
    scanf("%f", &altura);
    
    imc = peso / (altura * altura);
    printf("\n Seu IMC é: %.1f \n", imc);
    
    if (imc < limites[0]) {
        categoria = 0;
        printf("Categoria: Abaixo do peso \n\n");
    } else if (imc >= limites[0] && imc< limites[1]) {
        categoria = 1;
        printf("Categoria: Peso Ideal - Normal \n\n");
    } else {
        categoria = 2;
        printf("Categoria: Sobrepeso - Obesidade \n\n");
    }
    printf("Recomendação de Treino: \n");
    
    for (int i = 0; i < 3; i++) {
        printf("- %s\n", treinos[categoria][i]);
    }
    
    return 0;
} // fim