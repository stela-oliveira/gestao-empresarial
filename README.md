# 📦 Projeto Gestão Empresarial (E-commerce Simples/Admin Panel)

Este projeto é uma aplicação web desenvolvida em Laravel para gerenciar produtos e clientes, funcionando como um e-commerce simples com um painel administrativo.

---

## 🛠️ Tecnologias Utilizadas

O projeto foi construído utilizando o seguinte stack de tecnologias:

* **Linguagem:** PHP 8.x
* **Framework:** Laravel 10/11 (versão principal do projeto)
* **Banco de Dados:** MySQL (configurado via `.env`)
* **Interface:** Blade Templates (Laravel), HTML5, CSS3.
* **Estilização/Front-end:** Bootstrap (ou similar, dependendo do seu layout `layouts.admin` e `layouts.app`).

---

## 🖼️ Telas Principais

O projeto possui duas áreas principais: a área Pública (E-commerce) e a área Privada (Painel Admin).

### 1. Área Pública (E-commerce)
| Tela | URL | Descrição |
| :--- | :--- | :--- |
| **Home** | `/` ou `/home` | Página inicial do site. |
| **Listagem de Produtos** | `/produtos` | Lista todos os produtos disponíveis no banco de dados, em formato de cards. |
| **Detalhe do Produto** | `/produtos/{id}` | Exibe informações detalhadas, descrição e preço de um produto específico. |
| **Login** | `/login` | Formulário de acesso ao Painel Admin. |

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

## 🚀 Como Rodar o Projeto

Siga os passos abaixo para configurar e rodar o projeto em seu ambiente local.

### Pré-requisitos
Certifique-se de ter o **PHP**, **Composer** e **MySQL** instalados em sua máquina.

### 1. Configuração Inicial

1.  **Clone o repositório:**
    ```bash
    git clone [LINK DO SEU REPOSITÓRIO]
    cd nome-do-projeto
    ```

2.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```

3.  **Crie e configure o arquivo `.env`:**
    ```bash
    cp .env.example .env
    ```
    Edite o arquivo `.env` com suas credenciais de banco de dados (confira as configurações abaixo da seção).

4.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

### 2. Configuração do Banco de Dados

Baseado em suas credenciais:

| Variável | Valor |
| :--- | :--- |
| `DB_DATABASE` | `gestao_empresarial` |
| `DB_USERNAME` | `root` |
| `DB_PASSWORD` | `root` |

1.  **Crie o banco de dados `gestao_empresarial`** no seu ambiente MySQL.
2.  **Rode as migrações** para criar as tabelas (incluindo `clientes` e `produtos`):
    ```bash
    php artisan migrate
    ```

### 3. Configuração de Upload de Imagens

O projeto utiliza o sistema de arquivos do Laravel para armazenar imagens de produtos (no disco `public`).

1.  **Crie o link simbólico** para que as imagens sejam acessíveis publicamente:
    ```bash
    php artisan storage:link
    ```

### 4. Iniciando o Servidor

1.  **Inicie o servidor de desenvolvimento do Laravel:**
    ```bash
    php artisan serve
    ```

O projeto estará acessível em `http://127.0.0.1:8000`.

---

## 📚 Fontes de Pesquisa/Documentação

Esta seção deve ser **PREENCHIDA POR VOCÊ** com os links e títulos de todas as fontes de pesquisa utilizadas durante o desenvolvimento.

### Documentação e Artigos de Blog

| Tipo | Título do Artigo / Documentação Oficial | Link |
| :--- | :--- | :--- |
| Documentação | Laravel - File Storage (Upload de Arquivos) | [COLE SEU LINK AQUI] |
| Artigo/Blog | Como usar o findOrFail no Laravel | [COLE SEU LINK AQUI] |
| Artigo/Blog | Formatando valores monetários no PHP/Blade | [COLE SEU LINK AQUI] |
| **[ADICIONE MAIS]** | **[ADICIONE MAIS TÍTULOS AQUI]** | **[ADICIONE MAIS LINKS AQUI]** |

### Tutoriais e Vídeos do YouTube

| Título do Vídeo | Link | Minuto/Segundo da Informação |
| :--- | :--- | :--- |
| CRUD de Produtos com Upload de Imagem no Laravel | [COLE SEU LINK AQUI] | 08:32 (Exemplo) |
| Entendendo as Rotas Resource no Laravel | [COLE SEU LINK AQUI] | 03:00 (Exemplo) |
| **[ADICIONE MAIS]** | **[ADICIONE MAIS LINKS AQUI]** | **[ADICIONE MAIS MIN/SEG AQUI]** |