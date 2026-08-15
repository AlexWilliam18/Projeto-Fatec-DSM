""" def calcular_area():
    a = l * c
    return a

l = float(input("Digite a largura do terreno: "))
c = float(input("Digite o comprimento do terreno: "))
print("A área do terreno é de {} metros quadrados.".format(calcular_area())) """

# Outra forma abaixo

def calcular_area(l, c):
    a = l * c
    return a

largura = float(input("Digite a largura do terreno: "))
comprimento = float(input("Digite o comprimento do terreno: "))
resultado = calcular_area(largura, comprimento)
print("A área do terreno é de {} metros quadrados.".format(resultado))