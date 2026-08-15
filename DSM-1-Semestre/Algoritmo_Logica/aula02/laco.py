""" for i in range(0, 7):
    #não imprime o último número
    print(i)
print("Fim") """

for i in range(1, 101, 2): # do 1 até o 101 (não incluso) incrementando de 2 em 2
    print(i)
    if i==11:
        break #força o encerramento do laço quebrando ele
print("Fim")