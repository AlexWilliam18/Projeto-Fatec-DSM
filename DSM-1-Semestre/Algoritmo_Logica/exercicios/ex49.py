prod1 = float(input("Digite o preço do primeiro produto: "))
prod2 = float(input("Digite o preço do segundo produto: "))

desc1 = prod1 - (prod1 * (8/100))
desc2 = prod2 - (prod2 * (11/100))

valfinal = desc1 + desc2

print("o valor final a ser pago é: ", valfinal)