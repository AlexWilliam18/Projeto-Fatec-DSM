prod = float(input("Digite o valor do produto: "))
desc = prod - (prod * 10/100)
econ = prod * 10/100

print("Valor do produto: R${}, Preço com desconto: R${}, Economizou: R${}".format(prod, desc, econ))