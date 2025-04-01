# 🚀 GIP Framework – Ecossistema Completo WordPress

Este repositório contém **todos os módulos do GIP Framework**, incluindo:

- Microsite WordPress com estrutura segura
- Painel GIP WP Manager com REST + instalação ZIP
- CLI + Deploy + Painel externo
- GitHub Pages com documentação integrada

---

## 📁 Estrutura

```
📁 gip-framework/
├── site/                    → Base WordPress customizada (sem wp-content)
├── manager/                 → Plugin GIP WP Manager (REST + deploy + painel)
├── cli/                     → Scripts auxiliares CLI (instaladores, snapshots)
├── install/                 → Scripts de instalação automática
├── dashboard/              → Painel HTML externo para múltiplos deploys
├── docs/                   → GitHub Pages + Docsify (documentação)
├── version.json            → Controle central de versões do ecossistema
```

---

## 🔧 Requisitos

- PHP 8+
- Apache/Nginx com rewrite
- Suporte a SSH ou cPanel com ZIP
- Instalação padrão WordPress convertida em GIP via `gip-config.php`

---

## 📦 Componentes

| Nome               | Função                                          | Versão |
|--------------------|--------------------------------------------------|--------|
| GIP WP Manager     | Plugin com painel, REST e shortcode              | v1.7.0 |
| GIP Site           | WordPress com paths seguros e customizados       | v1.2.1 |
| GIP Installer      | Script `.sh` para clonar e implantar sites       | v1.5.0 |
| GIP Dashboard Web  | HTML externo para deploy multi-clientes          | v1.0.0 |

---

## 🧠 Base de Conhecimento GPT

Este repositório é utilizado para alimentar o **GPT GIP Dev Assistant** com:

- Changelogs
- Estrutura modular
- Painéis HTML + REST
- version.json para controle automático

---

## 📄 Como usar

1. Clone ou envie os arquivos via cPanel
2. Acesse o painel HTML: `/dashboard/deploy-multisite/`
3. Instale sites com:
   - Upload ZIP manual
   - Deploy remoto via REST API

---

Criado por [Thales Da Vinci](https://github.com/thales-da-vinci)  
MIT License · GIP Framework v1.7.0