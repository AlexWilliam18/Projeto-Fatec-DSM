import random
# Importa uma biblioteca para gerar números aleatórios

print("---------------------------------------------------------")
print("                        BETJunior                        ")
print("---------------------------------------------------------")

segredo = random.randrange(1, 11)
#print(segredo) # número Sorteado

acertou = False
tentativas = 3

for i in range(1, 4): # número 4 não conta
    print("Você possui", tentativas,"tentativas de 3\n")
    numero = int(input("Digite um número entre 1 e 10: "))

    if numero == segredo:
        acertou = True
    if acertou:
        print("-----------------------------------")
        print("    VOCÊ ACERTOU!!! PARABÉNS!!!    ")
        print("-----------------------------------")
        break
    else:
        print("Você errou! Tente novamente\n")
        tentativas -= 1
               
print("Fim de Jogo")