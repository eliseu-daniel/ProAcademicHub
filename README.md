## Pré-requisitos

Antes de começar, verifique se você tem o Docker e o Docker Compose instalados na sua máquina. Se ainda não tiver, siga as instruções no [site oficial do Docker](https://docs.docker.com/get-docker/) para instalar o Docker e o Docker Compose.

## Configuração

1. **Crie o arquivo `.env`**

   Na raiz do projeto, crie um arquivo `.env` com as variáveis de ambiente necessárias para o MySQL. Aqui está um exemplo de conteúdo para o arquivo `.env`:

    ```env
    MYSQL_ROOT_PASSWORD=rootpassword
    MYSQL_DATABASE=database
    MYSQL_USER=user
    MYSQL_PASSWORD=password
    ```

2. **Docker Compose**

   O arquivo `docker-compose.yml` configura os serviços para o MySQL e o PHP. Ele define como o MySQL e o PHP com Apache serão executados, mapeando as portas e volumes necessários.

3. **Dockerfile**

   O `Dockerfile` é utilizado para construir a imagem do PHP. Ele instala o Composer, as dependências do sistema, e ajusta as permissões para o diretório da aplicação.

## Instruções de Uso

1. **Construa e inicie os containers**

   No diretório raiz do projeto, execute o seguinte comando para construir as imagens e iniciar os containers:

   ```bash
   docker-compose up --build
   ```

2. **Acessando a Aplicação**

    Após iniciar os containers, você pode acessar a aplicação em http://localhost:8080. O banco de dados MySQL estará disponível na porta 3306.

3. **Parar os Containers**

    Para parar e remover os containers, execute:

    ```bash
    docker-compose down
    ```