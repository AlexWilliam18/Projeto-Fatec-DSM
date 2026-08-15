i = 1
maior = None
menor = None
soma = 0

while i <= 10:
    num = int(input("Digite o {}° número: ".format(i)))
    if maior is None or num > maior:
        maior = num

    if menor is None or num < menor:
        menor = num
        
    soma = soma + num
    i += 1

media = soma / 10

print("O maior número: ", maior)
print("O menor número: ", menor)
print("A soma dos números: ", soma)
print("A média dos números: ", media)