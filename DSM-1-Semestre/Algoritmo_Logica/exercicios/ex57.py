
i = 1
maior = 0

while i <= 7:
    num = int(input("Digite o {}° número: ".format(i)))
    i += 1

    if num > maior:
        maior = num

print("O maior número digitado foi: {}".format(maior))

## ALternativa

""" for i in range(0, 7):
    num = int(input("Digite o {}° número: ".format(i + 1)))

    if num > maior:
        maior = num

print("O maior número digitado foi: {}".format(maior)) """