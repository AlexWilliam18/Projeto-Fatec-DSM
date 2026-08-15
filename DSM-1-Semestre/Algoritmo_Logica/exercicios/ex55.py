quant = int(input("Digite a quantidade de notas que deseja inserir: "))
i = 1

while i <= quant:
    i +=1
    nota = float(input("Digite a {}° nota: ".format(nota)))
    soma = soma + nota

media = soma/quant
print("A média final é: {}".format(media))