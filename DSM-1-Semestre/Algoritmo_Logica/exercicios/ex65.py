numeros = []
i = 1

while i <= 5:
    num = int(input("Digite um número: "))
    numeros.append(num)
    numeros.sort()
    i += 1

print("Números Digitados: ")
for i in range(0, 5):
    print(numeros[i])