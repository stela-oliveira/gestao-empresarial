# 📦 Projeto Gestão Empresarial (E-commerce Simples/Admin Panel)

Este projeto é uma aplicação web desenvolvida em Laravel para gerenciar produtos e clientes, funcionando como um e-commerce simples com um painel administrativo.

---

## Tecnologias Utilizadas

O projeto foi construído utilizando o seguinte stack de tecnologias:

* **Linguagem:** PHP 8.x
* **Framework:** Laravel 10/11 (versão principal do projeto)
* **Banco de Dados:** MySQL (configurado via `.env`)
* **Interface:** Blade Templates (Laravel), HTML5, CSS3.
* **Estilização/Front-end:** Bootstrap (ou similar, dependendo do seu layout `layouts.admin` e `layouts.app`).

---

## Telas Principais

O projeto possui duas áreas principais: a área Pública (E-commerce) e a área Privada (Painel Admin).

### 1. Área Pública (E-commerce)
| Tela | URL | Descrição |
| :--- | :--- | :--- |
| **Home** | `/` ou `/home` | Página inicial do site. |
| **Listagem de Produtos** | `/produtos` | Lista todos os produtos disponíveis no banco de dados, em formato de cards. |
| **Detalhe do Produto** | `/produtos/{id}` | Exibe informações detalhadas, descrição e preço de um produto específico. |
| **Login** | `/login` | Formulário de acesso ao Painel Admin. |
| **Sobre** | `/sobre` | Detalhes sobre a empresa. |

### 2. Área Administrativa (Painel Admin)
| Tela | Rota Nomeada | URL | Funcionalidade Principal |
| :--- | :--- | :--- | :--- |
| **Dashboard** | `admin.dashboard` | `/admin/dashboard` | Visão geral do sistema. |
| **Listagem de Produtos** | `admin.produtos` | `/admin/produtos` | Exibe a lista completa de produtos cadastrados. |
| **Cadastro de Produto** | `admin.produtos.create` | `/admin/produtos/create` | Formulário para adicionar novos produtos com upload de imagem. |
| **Detalhe de Produto** | `admin.produtoDetalhe` | `/admin/produtos/{id}` | Visualiza os detalhes de um produto específico. |
| **Listagem de Clientes**| `admin.clientes` | `/admin/clientes` | Exibe a lista de todos os clientes cadastrados. |
| **Detalhe de Cliente**| `admin.clienteDetalhe` | `/admin/clientes/{id}` | Visualiza os dados cadastrais e endereço de um cliente específico. |

---

## Como Rodar o Projeto

Siga os passos abaixo para configurar e rodar o projeto em seu ambiente local.

### Pré-requisitos
Certifique-se de ter o **PHP**, **Composer** e **MySQL** instalados em sua máquina.

### 1. Configuração Inicial

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/stela-oliveira/gestao-empresarial
    ```

2.  **Instale as dependências do Composer e NPM:**
    ```bash
    composer install
    npm install
    ```

3.  **Crie e configure o arquivo `.env`:**
    ```bash
    cp .env.example .env
    ```
    Edite o arquivo `.env` com suas credenciais de banco de dados.

4.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

5.  **Rode as migrações** para criar as tabelas (incluindo `clientes` e `produtos`):
    ```bash
    php artisan migrate
    ```

### 2. Configuração de Upload de Imagens

O projeto utiliza o sistema de arquivos do Laravel para armazenar imagens de produtos (no disco `public`).

**Crie o link simbólico** para que as imagens sejam acessíveis publicamente:
    ```bash
    php artisan storage:link
    ```

### 3. Iniciando o Servidor

1.  **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    npm run dev
    ```

O projeto estará acessível em `http://127.0.0.1:8000`.

---

## 📚 Fontes de Pesquisa/Documentação

### Documentação e Artigos de Blog

| Tipo | Título do Artigo / Documentação Oficial | Link |
| :--- | :--- | :--- |
| Documentação | Laravel - File Storage (Upload de Arquivos) | https://laravel.com/docs/12.x/filesystem |
| Documentação | Laravel - Database: Migrations | https://laravel.com/docs/12.x/migrations |
| Video YT | LARAVEL #083 UPLOAD DE FICHEIRO PARA O STORAGE | https://youtu.be/Vlfct9p9sv0?si=GfJIt4ZJrA9uHhV1 (1:50) |
| Artigo/Blog | Como formatar valor monetários no Laravel | https://pt.stackoverflow.com/questions/147430/como-formatar-valor-monet%C3%A1rios-no-laravel |
| Documentação | Eloquent: Factories para os models | https://laravel.com/docs/12.x/eloquent-factories |
| Documentação | Exemplos para estilização para as tabelas | https://getbootstrap.com/docs/5.3/content/tables/ |
| Documentação | Cores para o layout | https://getbootstrap.com/docs/5.3/customize/color/ |
| Documentação | Implementar o ViaCep | https://viacep.com.br/ |
| Artigo/Blog | Limpar campo para implemar o viacep | https://pt.stackoverflow.com/questions/16860/limpar-cep-com-javascript |
| Artigo/Blog | Como verificar se tem algum erro no blade do laravel com a tag @error laravel 5.8.13? | https://pt.stackoverflow.com/questions/387849/como-verificar-se-tem-algum-erro-no-blade-do-laravel-com-a-tag-error-laravel-5 |

