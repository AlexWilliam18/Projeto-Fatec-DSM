print("Escolha uma das operações abaixo: ")
opcao = str(input("A - Soma / B - Substração / C - Multiplicação / D - Divisão: ").upper())

num1 = float(input("Digite um número: "))
num2 = float(input("Digite outro número: "))

if opcao == 'A':
    result = num1 + num2
    print("{} + {} = {}".format(num1, num2, result))
elif opcao == 'B':
    result = num1 - num2
    print("{} - {} = {}".format(num1, num2, result))
elif opcao == 'C':
    result = num1 * num2
    print("{} X {} = {}".format(num1, num2, result))
elif opcao == 'D':
    result = num1 / num2
    print("{} / {} = {}".format(num1, num2, result))