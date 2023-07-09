<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# API Laravel 10
## API para estudos

Olá, sou estudante de programação e este é meu primeiro contato com API e também com Framework. Escolhi o Laravel 10 por ser a versão mais atual no momento dos meus estudos.

## API de Troca de Livros

Esta é uma API Laravel para uma plataforma de troca de livros. A API permite que os usuários realizem várias operações relacionadas à troca de livros, como listar livros disponíveis, solicitar trocas e gerenciar suas próprias bibliotecas.

## Configuração

1.  Certifique-se de ter o PHP instalado na sua máquina (o mais atual possível).
2.  Clone este repositório: `git clone https://github.com/andrepfdev/api-laravel10.git`
3.  Instale as dependências do Composer: `composer install`
4. Link para Composer: https://getcomposer.org/download/
5.  Copie o arquivo `.env.example` para `.env` e atualize as configurações de banco de dados.
6.  Execute as migrações do banco de dados: `php artisan migrate`
7.  Inicie o servidor de desenvolvimento: `php artisan serve`

### Banco de dados SQLite3

Para baixar e usar o SQLite3: https://www.sqlite.org/
Outra ferramenta útil usada no processo: https://sqlitestudio.pl/

No arquivo .env configure o banco de dados:

    DB_CONNECTION=sqlite

Pode inclusive apagar as outras constantes do banco de dados. Fica a seu critério.

## Endpoints

A API possui os seguintes endpoints principais:
### `GET /users`

Retorna uma lista com todos os usuários cadastrados.

Exemplo de resposta:

    {
      "data": [
        {
          "identify": 1,
          "name": "Seu Jorge",
          "email": "mrjorge@gmail.com",
          "created": "09-07-2023 14:33:54"
        }
      ]
    }

### `GET /books`

Retorna uma lista de todos os livros disponíveis para troca.

#### Parâmetros de consulta opcionais:

-   `titulo`: Filtra os livros pelo título.
-   `autor`: Filtra os livros pelo autor.

Exemplo de resposta:

        {
      "data": [
        {
          "id": 1,
          "title": "A Republica",
          "author": "Platão",
          "created_at": "09-07-2023 19:36:53",
          "updated_at": "09-07-2023 19:36:53"
        },
        {
          "id": 2,
          "title": "Bíblia",
          "author": "Espírito Santo",
          "created_at": "09-07-2023 14:54:04",
          "updated_at": "09-07-2023 19:36:53"
        }
      ]
    }


