<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# API Laravel 10
## API para estudos

Olá, sou estudante de programação e este é meu primeiro contato com API e também com Framework. Escolhi o Laravel 10 por ser a versão mais atual no momento dos meus estudos.

## API de Troca de Livros

Esta é uma API Laravel para uma plataforma de troca de livros. A API permite que os usuários realizem várias operações relacionadas à troca de livros, como listar livros disponíveis, solicitar trocas e gerenciar suas próprias bibliotecas.

## Configuração

Neste caso estou usando Windows 11 sem Docker

1.  Certifique-se de ter o PHP 8.2 (ou superior) instalado na sua máquina.
2.  Clone este repositório: `git clone https://github.com/andrepfdev/api-laravel10.git`
3.  Instale as dependências do Composer: `composer install`
4.  Configure o arquivo `.env` para usar banco de dados SQLite. Instruções abaixo.
5.  Execute as migrações do banco de dados: `php artisan migrate`
6.  Inicie o servidor de desenvolvimento: `php artisan serve`

Link para Composer: https://getcomposer.org/download/

### Banco de dados SQLite3

Para baixar e usar o SQLite3: https://www.sqlite.org/
Outra ferramenta útil usada no processo: https://sqlitestudio.pl/

No Windows a instalação do SQLite pode ser feita desta forma: https://www.alura.com.br/artigos/sqlite-da-instalacao-ate-primeira-tabela 

No arquivo .env configure o banco de dados:

    DB_CONNECTION=sqlite

Pode inclusive apagar as outras constantes do banco de dados. Fica a seu critério.
Caso não deseje usar SQLite como banco de dados, pode usar as configurações originais de `.env.example`:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD= 

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

Até o momento todos estão configurados para pesquisar pelo ID

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

## Contribuição

Se você quiser contribuir para este projeto, sinta-se à vontade para abrir uma **issue** ou enviar uma solicitação de **pull**.
