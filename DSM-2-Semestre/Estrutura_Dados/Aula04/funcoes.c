#include <stdio.h>

// Declarando as funções:
void seApresentar();
float retornaSoma();

int main()
{
    // Invocando a função seApresentar():
    seApresentar();
    
    // A variável resultado guarda o que vier da função retornaSoma
    float resultado = retornaSoma();

    //Mostrando conteúdo da variável resultado:
    printf("\nResultado da soma: %.2f", resultado);

    return 0;
} // Fim do main

float retornaSoma()
{
    float numA = 0.0, numB = 0.0, result = 0.0;
    printf("\nDigite o primeiro número: ");
    scanf("%f", &numA);
    printf("\nDigite o segundo número: ");
    scanf("%f", &numB);

    result = numA + numB;

    return result;
} // Fim da retornaSoma

void seApresentar()
{
    printf("\n Hello World, my name is Alex");

    // Não tem return pois a função tem o tipo de retorno como vazio (void)
} // Fim da seApresentar()