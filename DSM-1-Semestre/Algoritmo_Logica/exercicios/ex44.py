""" letra = str(input("Digite uma letra: "))

if letra == "a" or  letra == "A" or letra == "e" or letra == "E" or letra == "i" or letra == "I" or letra == "o" or letra == "O" or letra == "u" or letra == "U":
    print("A letra é uma vogal.")
else:
    print("A letra é uma consoante.")

print("Programa encerrado") """

# Outra forma de resolver o exercício acima:

letra = str(input("Digite uma letra: ").upper())

if letra == "A" or letra == "E" or letra == "I" or letra == "O" or letra == "U":
    print("A letra é uma vogal.")
else:
    print("A letra é uma consoante.")