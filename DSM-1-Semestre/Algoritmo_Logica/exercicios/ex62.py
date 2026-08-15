print("Lista de números: ")
numeros = [1, 4, 3, 6, 2, 5]
maior = 0

for i in range(0,6):
    print(numeros[i])
    if numeros[i] > maior:
        maior = numeros[i]
        posicao = i

print("O maior número é {} e ele está na posição {}".format(maior, posicao+1))