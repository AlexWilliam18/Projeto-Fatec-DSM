""" def soma_num(num_desc):
    x = 0
    x = x + num_desc 
    soma = x + num_desc
    return soma

i = 1
cont = 0
while i != 0:
    if cont == 0:
        num = float(input("Digite um número: "))
        resultado = soma_num(num)
        cont += 1
    
    i = int(input("Deseja continuar? (1 - Sim / 0 - Não): "))

print("A soma é: {}".format(resultado)) """



def soma_num(num_desc):
    soma = x + num_desc
    x = num_desc
    return soma

i = 1
while i != 0:
    num = float(input("Digite um número: "))

    resultado = soma_num(num)
    print("A soma é: {}".format(resultado))

    i = int(input("Deseja continuar? (1 - Sim / 0 - Não): "))