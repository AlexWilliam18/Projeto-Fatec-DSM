import random
""" import os
def limpart_tela():
    os.system('cls' if os.name == 'nt' else 'clear') """
# Importa uma biblioteca para gerar números aleatórios

print("---------------------------------------------------------")
print("                        BETJunior                        ")
print("---------------------------------------------------------")

segredo = random.randrange(1, 11)
#print(segredo) # número Sorteado

acertou = False
tentativas = 3
i = 1

while i <=3: # número 4 não conta
    print("Você possui", tentativas,"tentativas de 3\n")
    numero = int(input("Digite um número entre 1 e 10: "))

    if numero == segredo:
        acertou = True
    elif numero < 1 or numero > 10:
        print("número Inválido! Chance extra!\n")
        i -=1
        tentativas +=1
    if acertou:
        print("-----------------------------------")
        print("    VOCÊ ACERTOU!!! PARABÉNS!!!    ")
        print("-----------------------------------")
        break
    else:
        print("Você errou! Tente novamente\n")
        tentativas -= 1
        
               
print("Fim de Jogo")