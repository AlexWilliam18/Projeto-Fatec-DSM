prod = float(input("Digite o preço do produto: "))
totalcomjuros = prod + (prod * 7/100)
parcelas = totalcomjuros/10

print("o valor das parcelas é de R${} em 10x e o valor total é de R${}".format(parcelas, totalcomjuros))