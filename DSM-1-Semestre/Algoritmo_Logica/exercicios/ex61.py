numeros = [10,11,12,13,14,15,16]
rep = "s"

while rep == "s":
    num = int(input("Digite um número entre 10 e 16: "))

    if num in numeros:
        indice = numeros.index(num)
        numeros[indice] = 7
        print(numeros)
    else:
        print("Valor incorreto")
    rep = str(input("Deseja reiniciar? s/n: ").upper())
    if rep == "n":
        print("Programa encerrado")