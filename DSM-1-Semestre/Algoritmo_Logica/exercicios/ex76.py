def rec_num (num):
    if num > 0:
        return 1
    elif num < 0:
        return -1
    else:
        return 0

num1 = float(input("Digite um número: "))
num = rec_num(num1)
print(num)