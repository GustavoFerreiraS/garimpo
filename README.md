# 🛠️ Projeto Final - Garimpo

**Garimpo** é um sistema web desenvolvido como trabalho final para o curso técnico em Informática. O objetivo da aplicação é permitir que usuários anunciem e encontrem produtos localmente, funcionando como uma plataforma de classificados online.

## 🚀 Funcionalidades

- Cadastro e login de usuários
- Publicação e gerenciamento de anúncios
- Marcar anúncios como favoritos
- Denunciar postagens indevidas
- Painel administrativo com AdminLTE

## 🧰 Tecnologias Utilizadas

- **Laravel (PHP)**
- **CSS**
- **JavaScript**
- **AdminLTE**

## 📁 Estrutura do Projeto

- `app/` - Lógica principal da aplicação
- `routes/` - Rotas da aplicação
- `resources/views/` - Templates Blade
- `public/` - Arquivos públicos (assets)
- `database/` - Migrations e seeds

## 👥 Colaboradores

- [Gustavo Ferreira](https://github.com/GustavoFerreiraS)
- [Jorlana Sousa](https://github.com/JorlanaSousa) 

## ⚙️ Como Executar Localmente

```bash
# Clone o repositório
git clone https://github.com/GustavoFerreiraS/garimpo.git

# Acesse o diretório
cd garimpo

# Instale as dependências
composer install

# Renomeie o .env
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no .env

# Rode as migrations
php artisan migrate

# Inicie o servidor local
php artisan serve
