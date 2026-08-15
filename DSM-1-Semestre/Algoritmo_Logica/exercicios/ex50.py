i = 1
soma = 0
nome = str(input("Digite um nome: "))
while i <= 3:
    nota = float(input("Digite a {}° nota: ".format(i)))
    i += 1
    soma = soma + nota

media = soma/3
if media > 7:
    print("Parabéns {}! Você foi aprovado".format(nome))
elif media < 7 and media > 5:
    print("Você ficou com média {} e está de recuperação".format(media))
else:
    print("{}, você está reprovado".format(nome))