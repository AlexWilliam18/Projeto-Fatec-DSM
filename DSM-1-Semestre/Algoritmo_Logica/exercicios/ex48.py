nome = str(input("Digite o nome: "))
n1 = float(input("Digite a primeira nota: "))
n2 = float(input("Digite a segunda nota: "))
media = (n1 + n2) / 2

if media >= 7:
    print("Parábens {}! Você foi aprovado".format(nome))
else:
    print("Você ficou com média {} e foi reprovado".format(media))

print("Programa encerrado")