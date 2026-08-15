""" for i in range (1, 11):
    print(i) """

""" for i in range (10, 0, -1):
    print(i) """

""" for i in range (0, 21, 2):
    print(i) """

""" num = int(input("Digite um número: "))
for i in range (1, 11):
    print("{} x {} = {}".format(num, i, num * i)) """

""" soma = 0
for i in range (1, 6):
    num = int(input("Digite o {}º número: ".format(i)))
    soma = soma + num

print("A soma dos números é: {}".format(soma)) """

""" soma = 0
for i in range (1, 6):
    n =  float(input("Digite a {}º nota: ".format(i)))
    soma = soma + n
media = soma / 5
print("A média das notas é: {}".format(media))  """

""" par = 0
for i in range (1, 11):
    n = int(input("Digite o {}º número: ".format(i)))

    if n % 2 == 0:
        par = par + 1
print("Quantidade de números pares: {}".format(par)) """

""" maior = 0
for i in range (1, 6):
    n = int(input("Digite o {}º número: ".format(i)))

    if n > maior:
        maior = n
print("O maior número é: {}".format(maior)) """

for i in range (1, 6):
    print("*")
    