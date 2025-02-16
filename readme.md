# 📌 GestecX - Sistema de Gestão de Vendas e Estoque

**GestecX** é um sistema robusto para **gestão de vendas, estoque e orçamentos**, desenvolvido em **PHP, MySQL, Bootstrap e jQuery**. O objetivo é fornecer uma plataforma eficiente e fácil de usar para gerenciar produtos, clientes e transações comerciais.

## 🚀 Funcionalidades Principais
- 📦 **Gerenciamento de Produtos e Estoque**
- 🛒 **Cadastro e Controle de Vendas**
- 📄 **Criação de Orçamentos e Conversão para Venda**
- 👥 **Cadastro e Gerenciamento de Clientes**
- 🔐 **Sistema de Usuários e Permissões**
- 📊 **Relatórios e Análises de Vendas**

---

## 🛠️ Tecnologias Utilizadas
- **PHP 8+**
- **MySQL / MariaDB**
- **Bootstrap 5** (UI Responsiva)
- **jQuery & JavaScript** (Dinamismo e Interatividade)
- **Composer** (Gerenciador de Dependências)
- **vlucas/phpdotenv** (Gerenciamento de Variáveis de Ambiente)

---

## 📥 Instalação e Configuração

### 1️⃣ Clonar o Repositório
```bash
git clone https://github.com/seuusuario/gestecx.git
cd gestecx
```

### 2️⃣ Instalar Dependências do Composer
```bash
composer install
```

### 3️⃣ Configurar o Arquivo `.env`
Crie um arquivo `.env` na raiz do projeto com as seguintes configurações:
```ini
DB_HOST=localhost
DB_PORT=3306
DB_NAME=GestecX
DB_USER=root
DB_PASSWORD=senha_segura
```

### 4️⃣ Criar o Banco de Dados e Importar a Estrutura
```bash
mysql -u root -p < database.sql
```

### 5️⃣ Rodar o Servidor PHP Local
```bash
php -S localhost:8000 -t public/
```
Acesse no navegador: **http://localhost:8000**

---

## 🎯 Contribuição
Se quiser contribuir com melhorias para o GestecX, siga os passos:
1. **Faça um Fork** do projeto.
2. Crie uma nova branch: `git checkout -b minha-feature`
3. Faça suas alterações e **commite**: `git commit -m 'Minha nova feature'`
4. Envie para o GitHub: `git push origin minha-feature`
5. Abra um **Pull Request** 🚀

---

## 📄 Licença
Este projeto está licenciado sob a **MIT License** – Sinta-se livre para usar e modificar! 😃

---

💡 *Desenvolvido para facilitar a gestão do seu negócio!*

