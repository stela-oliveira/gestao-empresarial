# Gestão Empresarial

Este projeto é uma plataforma de gestão empresarial desenvolvida com **Laravel 10** e **Bootstrap 5**, focada em fornecer uma interface simples e intuitiva para o gerenciamento de clientes, fornecedores e produtos.

## 🌟 Recursos Principais

* **Interface Amigável:** Layouts públicos e de administração customizados com um tema de cores amarelo, branco e preto.
* **Gestão de Entidades:**
    * Listagem e visualização de clientes.
    * Listagem de fornecedores.
    * Listagem e visualização de produtos.
* **Sistema de Roteamento:** Utiliza rotas nomeadas com controllers dedicados para uma arquitetura limpa e organizada.
* **Componentização Blade:** Reutilização de código através de `partials` (`navbar`, `footer`) e `components` (`card-produto`).
* **Compilação de Assets:** Utiliza **Vite** para compilar e servir os arquivos CSS e JavaScript do Bootstrap.

### Pré-requisitos

Certifique-se de que você tem o seguinte software instalado:

* **PHP** (versão 8.1 ou superior)
* **Composer**
* **Node.js** e **npm**

### 1. Clonar o Repositório

```bash
git clone [https://github.com/stela-oliveira/gestaoEmpresarial.git](https://github.com/stela-oliveira/gestaoEmpresarial.git)
cd gestaoEmpresarial
```

### 2. Instalar as Dependências
```bash
composer install
npm install
```

### 3. Configurar o Ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Executar o Servidor de Desenvolvimento
```bash
php artisan serve
npm run dev
```
Agora, você pode acessar a aplicação no seu navegador em http://127.0.0.1:8000.
