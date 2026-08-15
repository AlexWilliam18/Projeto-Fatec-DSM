def maior(n1, n2):
    if n1 > n2:
        return n1
    elif n2 > n1:
        return n2
    
num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))
resultado = maior(num1, num2)
print("O maior número é:", resultado)