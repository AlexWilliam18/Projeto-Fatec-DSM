termo = int(input("Digite o primeiro termo: "))
quantidade = int(input("Digite a quantidade de termos: "))
razao = int(input("Digite a razão: "))

for i in range(quantidade):
    print("a{}...{}".format(i + 1, termo))
    termo += razao