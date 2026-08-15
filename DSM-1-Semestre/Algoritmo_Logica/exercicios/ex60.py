numeros = [0]
numero = 1

while numero != 0:
    numero = int(input("Entre com um número: "))
    print("Lista atualizada")

    if numero != 0:
        numeros.append(numero) 
        numeros.sort() 
        for numero in numeros:
            print(numero)
    else:
        print("Programa encerrado")
        break