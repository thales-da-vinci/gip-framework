# 🧾 CHANGELOG GERAL – GIP Framework

## v1.7.0 (31/03/2025)

### 🔧 GIP WP Manager
- Adicionada rota REST: `/wp-json/gip/v1/deploy-site`
- Instalação remota de microsites via URL do ZIP
- Novo shortcode: `[gip_site_list]`
- Painel de upload no admin com status visual

### 🌐 Painel HTML externo (Dashboard Web)
- Painel `index.html` com deploy de múltiplos microsites
- Campos editáveis: nome, zip, endpoint
- Status visual e integração com REST

---

## v1.6.0
- Upload de ZIP via painel admin WordPress
- Extração automática em `gip-sites/`
- Validação e logs por site

---

## v1.5.0
- Script `install-gip-v1.5.sh`
- Integração com GIP Site
- Compatibilidade com painel GIP WP Manager

---

## v1.2.1 (Site)
- WordPress customizado com:
  - Pastas renomeadas (sem wp-content, plugins ou themes)
  - Segurança no `gip-config.php`
  - Instalação direta por CLI ou painel

---

Criado por Thales Da Vinci · GIP Framework com licença MIT