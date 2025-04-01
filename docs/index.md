# 📘 GIP WP Manager - Documentação v1.7.0

O GIP WP Manager é o painel central de controle do ecossistema GIP Framework, responsável por instalar, listar e integrar microsites personalizados via painel e REST API.

---

## 🔧 Funcionalidades Principais

### 1. Upload e Instalação via Painel
- Acesse **“Instalar GIP”** no menu do admin WordPress
- Envie um `.zip` com a estrutura `gip-system/`
- O plugin extrai o conteúdo em: `/wp-content/gip-sites/NOME_DO_SITE`

### 2. Deploy Remoto via REST API
- Endpoint: `POST /wp-json/gip/v1/deploy-site`
- Payload:
```json
{
  "name": "nome-do-site",
  "zip_url": "https://seudominio.com/site.zip"
}
```

### 3. Listagem de Sites com `[gip_site_list]`
- Adicione o shortcode em qualquer página ou post:
```plaintext
[gip_site_list]
```
- Ele exibirá uma tabela com todos os microsites instalados no diretório `gip-sites/`.

---

## 📦 Requisitos de ZIP
- Estrutura:
  - `gip-system/`
  - `gip-config.php`
  - (opcional) `site.json`, `layout/`, `modules/`
- Compactado no nível da raiz

---

## 🔐 Segurança e Permissões
- A rota REST está aberta por padrão para testes e integração.
- Pode ser protegida com autenticação (bearer token ou nonce REST).

---

## 🗂️ Diretórios utilizados

| Pasta                     | Função                            |
|---------------------------|-----------------------------------|
| `gip-sites/`              | Onde os microsites são instalados |
| `gip-system/modules/`     | Onde o plugin fica instalado      |

---

## 🧠 Autor e Licença

- Criado por **Thales Da Vinci**
- Parte oficial do **GIP Framework**
- Licenciado sob MIT