frutas = ['laranja', 'amora', 'morango', 'banana', 'amora', 'mamão', 'banana']

for fruta in frutas:
    print(fruta)

""" print("Quantidade de amoras : ", frutas.count('amora')) # Conta quantas vezes a amora aparece na lista
print("Quantidade de mangas : ", frutas.count('manga')) # Conta quantas vezes a manga aparece na lista
print("Localização do mamão : ", frutas.index('mamão')) # Retorna o índice da primeira posição do mamão """

""" print('Adicionando uva')
frutas.append('uva') # Adiciona a uva no final da lista
for fruta in frutas:
    print(fruta) """

""" print('Invertendo a lista')
frutas.reverse() # Inverte a ordem dos elementos na lista
for fruta in frutas:
    print(fruta) """

print('Ordenando a lista')
frutas.sort() # Ordena a lista em ordem alfabética
for fruta in frutas:
    print(fruta)