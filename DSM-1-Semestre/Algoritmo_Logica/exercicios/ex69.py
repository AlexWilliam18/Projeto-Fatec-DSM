letras = ['A','B','C','D','E']
for i in range(0, 5):
    print(letras[i])

subs = str(input("Escolha uma das letras para ser substítuida por 'X': ").upper())

if subs in letras:
    indice = letras.index(subs)
    letras[indice] = 'X'
    print (letras)
else:
    print("Letra inválida. Tente novamente.")