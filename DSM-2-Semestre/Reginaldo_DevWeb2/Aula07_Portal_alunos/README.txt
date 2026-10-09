PORTAL ALUNOS - PHP + MySQL
=================================

Portal em PHP com login real (usuários no MySQL), CRUD de usuários e perfis
(administrador / usuário). Siga os passos abaixo na ordem.


PASSO A PASSO
=============

1 - CRIAR O BANCO DE DADOS (fazer isto primeiro)
-----------------------------------------------
Abra o MySQL da mesma forma que usamos nas aulas e execute o arquivo
banco.sql inteiro.

  - Abra o banco.sql, selecione todo o conteúdo e execute (Run / Executar).
  - O script cria o banco "portal" e a tabela "usuarios" já com todos os
    campos que o código precisa:

      id      INT AUTO_INCREMENT PRIMARY KEY
      nome    VARCHAR(100) NOT NULL
      email   VARCHAR(100) NOT NULL UNIQUE
      senha   VARCHAR(255) NOT NULL        (guarda o hash do password_hash)
      perfil  VARCHAR(20)  NOT NULL DEFAULT 'usuario'   ('admin' ou 'usuario')

  - Não insira usuários manualmente: o primeiro usuário é criado pelo próprio
    site (passo 5).
  - Se o banco "portal" já existia antes (sem a coluna perfil), execute o código deixado no arquivo banco.sql com a mensagem em CAPSLOCK, ou apague o banco (DROP DATABASE portal;) e rode o banco.sql de novo.


2 - CONFERIR A CONEXÃO
---------------------
Abra o conexao.php e confira se os dados são os do seu MySQL:

    $host = "localhost";
    $banco = "portal";
    $usuario = "root";
    $senha = "";

3 - COLOCAR O PROJETO NO SERVIDOR
--------------------------------
Copie a pasta do projeto (Aula07_Portal_alunos) para a pasta pública do
servidor local:

    XAMPP:    C:\xampp\htdocs\Aula07_Portal_alunos

Os arquivos (index.php, conexao.php, estilo.css, pasta includes etc.) devem
ficar direto dentro dessa pasta.


4 - INICIAR OS SERVIÇOS
----------------------
Inicie o Apache e o MySQL (painel do XAMPP).


5 - CRIAR O PRIMEIRO USUÁRIO
---------------------------
1. No navegador, acesse: http://localhost/Aula07_Portal_alunos/
2. A tela de login avisa "Nenhum usuário cadastrado". Clique em
   "Criar o primeiro usuário".
3. Preencha nome, e-mail, senha e confirmação e clique em "Criar usuário".
4. Esse primeiro usuário já nasce como ADMINISTRADOR. A página se bloqueia
   sozinha depois do primeiro cadastro.


6 - ENTRAR E USAR
----------------
1. Faça login com o e-mail e a senha criados.
2. Como administrador você vê o menu completo:
   - CADASTRAR: cria novos usuários, escolhendo o perfil (Usuário ou
     Administrador). Valida campos obrigatórios, confirmação de senha e
     e-mail duplicado.
   - USUÁRIOS: lista (sem mostrar senhas), com botões Editar e Excluir.
   - Editar: altera nome, e-mail e perfil; a senha só muda se uma nova for
     digitada.
   - Excluir: pede confirmação antes de apagar.
3. Usuário comum acessa só INÍCIO, SOBRE e CONTATO; as páginas de
   gerenciamento ficam bloqueadas.
4. O administrador não consegue excluir a própria conta nem retirar o
   próprio perfil de administrador.
5. SAIR encerra a sessão e bloqueia o retorno às páginas internas.


DECISÃO DE IDENTIDADE VISUAL
============================

Icone P&A - Portal Alunos (O "&" é somente para dar um charme)

Cores escolhidas
  - Inspiração no SIGA: o visual foi pensado para ficar o mais próximo
    possível do sistema SIGA da Fatec, que tem o vermelho como cor marcante.
  - Preferência pessoal: gosto de vermelho, por isso ele é a cor principal
    do portal.
  - Cores mais suaves: a paleta foi escolhida no site Coolors, com tons mais suaves e harmônicos.

Paleta (Coolors) principais
  Deep Crimson   #931F1D   cabeçalho, botões, cabeçalho da tabela, títulos, links e fundo da tela de login
  Faded Copper   #937B63   borda inferior do cabeçalho e borda superior dos cartões
  Palm Leaf      #8A9B68   borda da mensagem de sucesso
  Dry Sage       #B6C197   borda dos campos de formulário e fundo da mensagem de sucesso
  Beige          #D5DDBC   fundo da página e linhas da tabela

ESCOLHA DAS FONTES
  - Títulos (Georgia): fonte com serifa, que dá um ar formal e institucional
    ao portal e destaca os títulos.
  - Textos, menu, formulários e tabelas (Verdana): fonte sem serifa feita
    para leitura em tela, com letras largas e fáceis de distinguir.
  - Compatibilidade: as duas já vêm instaladas na maioria dos sistemas, então
    não é preciso carregar fontes externas. Se faltar alguma, o CSS usa
    reservas: Geneva e sans-serif para a Verdana, e serif para a Georgia.