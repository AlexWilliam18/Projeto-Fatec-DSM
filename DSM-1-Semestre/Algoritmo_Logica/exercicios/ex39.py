sal = float(input("Digite o salário do funcionário: "))

if sal < 500:
    reaj = sal + (sal * 15/100)
elif sal >= 500 and sal <= 1000:
    reaj = sal + (sal * 10/100)
else:   
    reaj = sal + (sal * 5/100)

print("O salário reajustado é de: R$", reaj)