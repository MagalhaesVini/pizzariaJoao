Pizzaria do João - Sistema de Gerenciamento de Pedidos (Sistema Local)

Este é um sistema local desenvolvido como parte do curso "SQL do Básico ao Avançado", criado para simular um sistema de gerenciamento de pedidos para a Pizzaria do João. O sistema utiliza um banco de dados local para armazenar os pedidos e oferece funcionalidades para clientes e administradores.

Estrutura do Projeto

- database/
  - pizzaria.sql
  - pizzaria_diagram.png
- css/
  - styles.css
- img/
  - pizza-banner.jpg
  - pizza.svg
- process/
  - conn.php
  - orders.php
  - pizza.php
- templates/
  - footer.php
  - header.php
- dashboard.php
- index.php
- README.md

Funcionalidades

Para Clientes

    Realização de Pedidos:
        Escolha de massa entre comum, integral e temperada.
        Seleção de borda entre catupiry, cheddar ou sem recheio.
        Escolha de até 3 sabores de pizza entre: 4 queijos, 5 queijos, calabresa, frango com catupiry, lombinho, margherita e portuguesa.

Para Admin

    Gerenciamento de Pedidos:
        Visualização dos pedidos recebidos.
        Mudança de status dos pedidos: Em produção, Entrega, Concluído.
        Remoção de pedidos cancelados pelos clientes.

Instruções de Uso

Configuração do Ambiente

    Clone este repositório: git clone https://github.com/MagalhaesVini/pizzariaJoao.git.
    Certifique-se de ter as dependências necessárias instaladas.

Configuração do Banco de Dados (Sistema Local)

Arquivos do Banco de Dados

    Os arquivos do banco de dados estão disponíveis localmente dentro do repositório.
    O arquivo pizzaria.sql contém o dump do banco de dados, incluindo a estrutura das tabelas e dados de exemplo.
    O diagrama de entidade relacional está disponível como pizzaria_diagram.png na pasta database/, fornecendo uma representação visual das relações entre as tabelas.

Importação do Banco de Dados

    Acesso ao Banco de Dados Local:

    Utilize um software de gerenciamento de banco de dados, como MySQL Workbench ou phpMyAdmin, instalado localmente na sua máquina.

    Criação e Importação:
        Abra o software de gerenciamento de banco de dados.
        Crie um novo banco de dados local chamado pizzaria.
        Importe o arquivo pizzaria.sql no banco de dados local para criar as tabelas e inserir os dados de exemplo.

Verificação do Diagrama de Entidade Relacional

    Consulte o arquivo pizzaria_diagram.png na pasta database/ para visualizar o diagrama de entidade relacional.
    Este diagrama oferece uma representação visual das tabelas e seus relacionamentos, ajudando a entender a estrutura do banco de dados e as conexões entre as entidades.

Inicialização do Sistema Local

    Configuração do Ambiente do Projeto:
        Clone este repositório: git clone https://github.com/MagalhaesVini/pizzariaJoao.git.
        Instale as dependências necessárias.

    Inicialização do Servidor Local:
        Inicie o servidor local para executar o sistema.
        Acesse o sistema através do navegador localmente.

Estrutura do Banco de Dados

    Arquivo SQL:
        Exportação do Banco de Dados em SQL (pizzaria.sql)
        Diagrama de Entidade Relacional (pizzaria_diagram.png)

Contribuição

    Este projeto é parte de um curso e não está aberto para contribuições externas.

Autor

    Vinícius Magalhães

Licença

Este projeto é parte de um curso educacional e não possui licença específica.