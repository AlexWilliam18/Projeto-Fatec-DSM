import os
def limpart_tela():
    os.system('cls' if os.name == 'nt' else 'clear') 

rep = "s"
while rep == "s":
    if rep == "s":
        limpart_tela()
        print("-----------------------------")
        print("Seja bem-vindo(a) ao Mybank")
        print("SIMULADOR DE EMPRÉSTIMO")
        print("-----------------------------")

        cli = str(input("Você já é nosso cliente? s/n: "))

        if cli == "n":
            score = int(input("Digite seu Serasa score: "))
            if score >= 0 and score <= 299:
                txjuros = 20/100
                vistaxa = 20
            elif score >= 300 and score <= 499:
                txjuros = 15/100
                vistaxa = 15
            elif score >= 500 and score <= 699:
                txjuros = 10/100
                vistaxa = 10
            elif score >= 700 and score <= 1000:
                txjuros = 5/100
                vistaxa = 5
        else:
            txjuros = 3/100
            vistaxa = 3

        vlemprestimo = float(input("Digite o valor desejado para empréstimo: "))
        parc = int(input("Quantidade de parcelas: "))

        impiof = vlemprestimo * (0.38/100)
        valtaxa = vlemprestimo * txjuros

        if cli == "n":
            valtotal = vlemprestimo + valtaxa + 35 + impiof
        else:
            valtotal = vlemprestimo + valtaxa + impiof

        segdes = str(input("Deseja incluir um seguro desemprego no seu empréstimo? s/n: "))
        if segdes == "s":
            valtotal = valtotal + 50

        vlrparc = vlemprestimo/parc
        
        print("-----------------------------")
        print("RESULTADO DA SIMULAÇÃO")
        print("-----------------------------")
        print("Quantidade de parcelas: ", parc)
        print("Valor das parcelas:  ", vlrparc)
        print("Taxa de juros: {}%".format(vistaxa))
        print("Custo Efetivo Total: ", valtotal)
        print("-----------------------------")

        rep = str(input("Deseja realizar outra simulação? s/nn: "))
        if rep == "n" or rep == "nn":
            print("Programa Encerrado")