sal = float(input("Digite o seu salário: "))

if sal <= 2428:
    descirr = 0
elif 2428 < sal <= 2826:
    descirr = sal * 0.075
elif 2826 < sal <= 3751:
    descirr = sal * 0.15
elif 3751 < sal <= 4664:
    descirr = sal * 0.225
else:
    descirr = sal * 0.275

if sal <= 1518:
    descinss = sal * 0.075
elif 1518 < sal <= 2794:
    descinss = sal * 0.09
elif 2794 < sal <= 4190:
    descinss = sal * 0.12
else:
    descinss = sal * 0.14

salliquido = sal - descinss - descirr

print("O salário bruto é: R${}".format(sal))
print("O desconto do INSS é de R${} e o do IR é de R${}".format(descinss, descirr))
print("O salário líquido é de R${}".format(salliquido))