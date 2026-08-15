valmens = float(input("Digite o valor da mensalidade: "))
print("Digite a forma de pagamento(número): ")
formpag = int(input("1 - Cartão, 2 - Pix(6% de desconto) e 3 - Dinheiro(10% de desconto): "))

if formpag == 2:
    valfinal = valmens - (valmens * 6/100)
elif formpag == 3:
    valfinal = valmens - (valmens * 10/100)
else:
    valfinal = valmens

print("O valor final da mensalidade é: R${}".format(valfinal))

print("Programa encerrado")