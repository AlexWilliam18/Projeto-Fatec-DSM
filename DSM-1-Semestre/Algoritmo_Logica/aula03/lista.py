""" #Estrutura de dados: Lista
nomes = ['Amanda', 'Bruno', 'Camila', 'Davi', 'Elen', 'Felipe']
print(nomes[1])
print(nomes[3])

for i in range(0,6,2): # 0 -> Pois o índice começa do zero, 6 -> para percorrer até o 5 índice e 2 -> para pular de 2 em 2
    print(nomes[i]) """

numeros = [1, 5, 12, 13, 20, 39]

print("Números originais")
for i in numeros:
    print(i)

print("Números alterados")
for num in numeros:
    print(num+3)