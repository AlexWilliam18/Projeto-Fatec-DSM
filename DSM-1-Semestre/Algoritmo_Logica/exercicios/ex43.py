cont = 1
soma = 0
while cont <= 10:
    valor = float(input("Digite o {}° valor: ".format(cont)))
    soma = soma + valor
    cont += 1

media = soma / 10
print("A média dos valores digitados é: {}".format(media))

print("Programa encerrado")