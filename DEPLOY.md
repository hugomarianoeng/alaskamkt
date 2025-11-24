# Deploy para Umbler

## Passo 1: Criar a tabela no MySQL

1. Acesse o **phpMyAdmin** no painel da Umbler
2. Selecione o banco de dados `crm`
3. Vá na aba **SQL**
4. Cole o conteúdo do arquivo `setup.sql`:

```sql
CREATE TABLE IF NOT EXISTS leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_created (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

5. Clique em **Executar**

## Passo 2: Upload dos arquivos via FTP

### Credenciais FTP (obtenha no painel Umbler):
- **Host:** ftp.umbler.com
- **Usuário:** seu_usuario_umbler
- **Senha:** sua_senha_umbler
- **Porta:** 21

### Arquivos para fazer upload:
- `index.php`
- `about.php`
- `contact.php`
- `services.php`
- `team.php`
- `config.php` (com suas credenciais)
- Pasta `westcoastphysio/` (se existir)

### Usando FileZilla ou qualquer cliente FTP:
1. Conecte ao FTP da Umbler
2. Navegue até a pasta `public_html` ou `www`
3. Faça upload de todos os arquivos listados acima

## Passo 3: Testar o site

Acesse seu domínio na Umbler e teste o formulário de contato!

## Alternativa: Deploy via Git (se configurado)

```bash
git init
git add .
git commit -m "Deploy inicial Alaska Marketing"
git remote add umbler [URL_DO_GIT_UMBLER]
git push umbler master
```
