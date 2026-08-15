def calcular_porcentagem(n1, n2):
    porcentagem = n2 / n1 * 100
    return porcentagem

num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))
resultado = calcular_porcentagem(num1, num2)
print("{} é {}% de {}".format(num2, resultado, num1))