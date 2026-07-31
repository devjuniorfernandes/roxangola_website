# ROX Angola (ROX Motor) - Portal e CMS

Bem-vindo ao repositório do projeto **ROX Angola**. Este projeto é composto por um portal público (Front-End) para apresentação de veículos da marca ROX e um painel de administração (CMS / Back-End) para gestão de contactos, modelos de veículos e conteúdos.

## 🛠 Stack Tecnológica

- **Backend:** Laravel 11.x / PHP 8.3+
- **Frontend / Styling:** Tailwind CSS, Alpine.js
- **Gestor de Assets:** Vite
- **Base de Dados:** SQLite (pode ser alterado para MySQL/PostgreSQL via `.env`)
- **Autenticação:** Laravel Breeze (sessões tradicionais Blade)

---

## 📂 Estrutura do Projeto

A estrutura segue o padrão do Laravel, com algumas particularidades para a organização do CMS:

- `routes/web.php` - Contém as rotas públicas (Front-end) e as rotas protegidas do painel (`/admin/...` e `/dashboard`).
- `app/Http/Controllers/Admin/` - Controladores dedicados à gestão do CMS (ex: `VehicleController`, `ContactController`).
- `resources/views/`
  - `admin/` - Vistas do CMS (gestão de contactos, veículos, etc).
  - `components/` - Componentes Blade reutilizáveis (navbar, footer, botões).
  - `layouts/` - Layouts principais do projeto (ex: `app.blade.php` para o CMS, com barra lateral gerida via Alpine.js).
  - Vistas na raiz (ex: `welcome.blade.php`, `rox01.blade.php`, `rox-adamas.blade.php`) - Vistas públicas do site.
- `public/assets/` e `public/images/` - Contêm imagens estáticas, SVGs, logótipos e *renders* dos veículos. Imagens carregadas via CMS vão para `storage/app/public/...` (acessíveis via `public/storage/`).

---

## 🚀 Instalação e Configuração Local

1. **Clonar o projeto e instalar dependências PHP:**
   ```bash
   composer install
   ```

2. **Instalar dependências Node.js:**
   ```bash
   npm install
   ```

3. **Configurar o ficheiro `.env`:**
   Copie o `.env.example` para `.env` e configure as chaves da base de dados. O projeto está atualmente configurado para usar SQLite na pasta `database/`.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrar a base de dados e semear (Seed) dados base:**
   ```bash
   php artisan migrate --seed
   ```
   *Nota:* O comando `--seed` irá criar o utilizador administrador por defeito.

5. **Criar Link de Storage:**
   É obrigatório para as imagens dos veículos carregadas através do CMS funcionarem no Front-End.
   ```bash
   php artisan storage:link
   ```

6. **Iniciar os Servidores Locais:**
   Num terminal, inicia o servidor PHP:
   ```bash
   php artisan serve
   ```
   Noutro terminal, inicia o Vite para compilação do Tailwind em tempo real:
   ```bash
   npm run dev
   ```

---

## 🔑 Acessos e Rotas Principais

### Front-End (Público)
- **Home / Landing Page:** `/`
- **ROX 01:** `/rox-01`
- **ROX Adamas:** `/rox-adamas`
- **Explorar:** `/explorar`
- **Contactos:** `/contactos`

### CMS (Painel de Administração)
Para aceder ao CMS, navegue para `/login`.

**Credenciais por defeito (criadas no DatabaseSeeder):**
- **Email:** `admin@roxangola.com`
- **Password:** `password`

**Rotas do CMS:**
- **Dashboard:** `/dashboard` (Resumo e métricas)
- **Veículos:** `/admin/vehicles` (Listagem, criação e edição de modelos de veículos)
- **Pedidos de Contacto:** `/admin/contacts` (Caixa de entrada dos formulários do site)
- **Gestão de Páginas/Conteúdos:** `/admin/pages`

---

## 🎨 Notas de Design do CMS

O painel de administração sofreu um redesign focado no minimalismo e num aspeto profissional:
- **Tailwind Puro:** Não utilizamos bibliotecas UI pesadas externas. Tudo foi construído com utilitários Tailwind (usando `ring-1`, `shadow-sm`, etc., para aspeto corporativo).
- **Responsividade:** A barra lateral (Sidebar) e os Data Grids (tabelas) utilizam `Alpine.js` para manipulação de estado, sendo 100% amigáveis para dispositivos móveis.
- **Componentes:** Sempre que possível, encapsule blocos de UI nos diretórios `resources/views/components/` (ex: botões, inputs do formulário).

---

## 🚧 Tarefas Futuras / Próximos Passos (Para o próximo dev)

1. **Limpeza de Storage:** No `VehicleController`, garantir que, ao atualizar ou apagar um veículo, a imagem antiga alojada em `/storage` é devidamente removida para não criar "lixo" no servidor.
2. **Rotas Front-End Dinâmicas:** Atualmente `rox-01` e `rox-adamas` são *hardcoded* nas rotas e vistas. Podem ser transformadas numa rota genérica `/modelos/{slug}` que aceda à base de dados de veículos.
3. **Páginas Dinâmicas (CMS):** A secção `/admin/pages` pode ser expandida para permitir a alteração das descrições do *Footer* ou moradas através da base de dados (Tabela `SiteSection`).

---

*Desenvolvido pela equipa técnica da Octa Angola Angola.*
