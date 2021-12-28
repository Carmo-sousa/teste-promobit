# Teste Promobit

Projeto feito em laravel 8.x para o teste da Promobit.

O laravel provê integração nativa para o desenvolvimento com docker. Porem por fins de aprendizado escrevi meu proprio `Dockerfile` e `docker-compose.yml`.

## Funcionalidades

- [x] CRUD de produtos
- [x] CRUD de tags
- [x] Mensagens de sucesso para cada ação
- [ ] Mensagens de erro para cada ação
- [x] Paginação de produtos
- [ ] Nível de acesso para cada usuário
- [ ] Testes unitários
- [x] Autenticação de usuário

## Requisitos

- PHP 7.X
- Docker
- Docker Compose

## Instalação

- Copiando o arquivo `.env.example` para `.env`
    ```bash
    cp .env.example .env
    ```

- Criando o container do projeto:
    ```bash
    $ docker-compose up --build -d
    ```
- Instalando as dependências:
    ```bash
    $ docker-compose exec app bash
    $ composer install
    ```
- Rodando as migrations:
    ```bash
    $ docker-compose exec app bash
    $ php artisan migrate
    ```
- Rodando o npm caso necessário alteracões no frontend:
    ```bash
    $ npm install
    $ npm run watch
    ```
Basta acessar o projeto no navegador: [http://localhost](http://localhost)

## Query com informações relevantes

- Total de tags para um produto específico:
    ```sql
    SELECT COUNT(*) AS Tags FROM tags t
    WHERE t.id IN (
    SELECT t.id
    FROM tags t
    INNER JOIN product_tag pt ON t.id = pt.tag_id
    INNER JOIN products p ON pt.product_id = p.id
    WHERE p.name = '<produto>'
    );
    ```
- Total de produtos para uma tag específica:
    ```sql
    SELECT COUNT(*) FROM products p
    WHERE p.id IN (
    SELECT pt.product_id
    FROM product_tag pt
    INNER JOIN tags t ON pt.tag_id = t.id
    WHERE t.name = '<tag>'
    );
    ```
