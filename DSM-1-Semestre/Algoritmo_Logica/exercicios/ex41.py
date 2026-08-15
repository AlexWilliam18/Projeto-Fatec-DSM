altura = float(input("Digite a altura da pessoa: "))
peso = float(input("Digite o peso da pessoa: "))

imc = peso/(altura*altura)
if imc < 18.5:
    print("Abaixo do peso")
elif imc >= 18.5 and imc < 25:
    print("Peso normal")
elif imc >= 25 and imc < 30:
    print("Sobrepeso")
elif imc >= 30 and imc < 35:
    print("Obesidade")

print("Programa encerrado")