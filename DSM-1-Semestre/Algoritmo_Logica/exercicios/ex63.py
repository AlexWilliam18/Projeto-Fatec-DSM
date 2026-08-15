media = float(input("Digite a média do aluno: "))
freq = float(input("Digite a frequência do aluno: "))

if freq < 75:
    print("Você foi reprovado")
elif freq >= 75 and media < 7:
    print("Você está de recuperação")
elif freq >= 75 and media >= 7:
    print("Você foi aprovado")