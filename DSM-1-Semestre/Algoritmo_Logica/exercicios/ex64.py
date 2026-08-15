numeros = []

while True:
    num = int(input("Digite um número: "))

    if num == 0:
        break
    numeros.append(num)
    numeros.sort()

print("Números pares: ")
for num in numeros:
    if str(num).endswith(('0','2','4','6','8')):
        print(num)