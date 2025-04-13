# Projeto_D_Influencers
API de gestão de influenciadores e campanhas

Projeto Influenciadores

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

## 📖 Descrição

Este projeto é uma API para gerenciar influenciadores, campanhas e integrações, desenvolvido em Laravel com autenticação JWT e testes automatizados.

---

## 💻 Tecnologias Utilizadas

- **Framework**: Laravel 12.8.1
- **Banco de Dados**: MySQL
- **Autenticação**: JWT
- **Testes**: PHPUnit com cobertura de código (Xdebug)

---

## 🔧 Motivo da Escolha do Framework

Escolhi o Laravel para o desenvolvimento deste projeto devido às seguintes vantagens:

- **Fácil Configuração e Desenvolvimento Rápido**: Laravel oferece uma estrutura robusta e fácil de usar, com ferramentas que ajudam a acelerar o desenvolvimento de APIs, como Eloquent ORM, rotas e autenticação pronta.
- **Autenticação JWT Integrada**: A implementação de autenticação via JWT foi simples de configurar com Laravel, o que facilita a segurança na comunicação da API.
- **Testes Automatizados**: Laravel possui suporte nativo para PHPUnit, permitindo uma integração simples e eficaz para rodar testes unitários e de integração, garantindo que a aplicação esteja funcionando como esperado.
- **Comunidade e Suporte**: Laravel tem uma comunidade grande e ativa, com abundância de tutoriais, pacotes e exemplos prontos.

---

## ⚙️ Como Rodar o Ambiente Localmente

### 📝 Requisitos:

- PHP >= 8.0
- Composer
- MySQL (ou outro banco de dados suportado)
- Docker (opcional, caso queira rodar o projeto em contêineres)

### 🚀 Passos para Rodar Localmente:

1. **Clone o repositório**:
   ```bash
   git clone <url-do-repositório>
   cd <diretório-do-projeto>
Instale as dependências com o Composer:

composer install
Configure o arquivo .env:

Copie o arquivo .env.example para .env:

cp .env.example .env
Configure as variáveis de ambiente no .env de acordo com o seu ambiente (banco de dados, chave da API, etc.).

Gere a chave de aplicação:

php artisan key:generate
Execute as migrações para criar as tabelas no banco de dados:


php artisan migrate
Execute o servidor de desenvolvimento:


php artisan serve
O servidor estará disponível em http://localhost:8000.

🛠️ Testando os Endpoints via Postman
📚 Documentação da API no Postman
Para facilitar os testes da API, você pode utilizar o Postman. Abaixo estão os links para os documentos da API, onde você pode importar as coleções do Postman e testar todos os endpoints disponíveis:

- [📂 Campanha API Docs](https://documenter.getpostman.com/view/43786801/2sB2cYcKrA)
- [📂 Influenciadores API Docs](https://documenter.getpostman.com/view/43786801/2sB2cYcKrC)
- [📂 Registro User API Docs](https://documenter.getpostman.com/view/43786801/2sB2cYcKrF)
- [📂 Relacionar Influenciador API Docs](https://documenter.getpostman.com/view/43786801/2sB2cYcKrG)

📝 Como Testar os Endpoints
Abra o Postman.

Importe as coleções:

Clique em Import no canto superior esquerdo.

Selecione a opção Link e cole o link da documentação acima.

Clique em Import para adicionar a coleção ao seu Postman.

Execute os testes:

Selecione a coleção importada no Postman.

Escolha o endpoint que deseja testar.

Modifique as variáveis de entrada conforme necessário (ex.: dados de usuário, token de autenticação).

Clique em Send para enviar a requisição e visualizar a resposta.

🧪 Rodando os Testes Automatizados
🛠️ Como Rodar os Testes:
Instalar as dependências do projeto: Certifique-se de ter o Composer instalado. No diretório raiz do projeto, execute o seguinte comando:

composer install
Rodar os testes automatizados: Você pode rodar os testes utilizando o PHPUnit. Execute o seguinte comando para rodar todos os testes:

php artisan test
Ou, se preferir, pode rodar diretamente os testes com o PHPUnit:

./vendor/bin/phpunit
Isso irá rodar todos os testes do projeto e exibir os resultados no terminal.
