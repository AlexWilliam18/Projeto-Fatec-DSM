cont = 1
soma = 0
while cont <= 3:
    nota = float(input("Digite a {}ª nota: ".format(cont)))
    soma = soma + nota
    cont = cont + 1

media = soma / 3
if media >= 7:
    print("Parabéns! Você foi aprovado")
else:
    print("Você foi reprovado")

print("Programa encerrado")