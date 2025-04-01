# 🧠 GIP Framework - Instruções Completas

Este documento reúne todas as instruções, comandos, repositórios e atualizações do ecossistema GIP (Guided Iterative Precision), incluindo plugins, microsites, CLI, REST e integração com GPT personalizado.

---

## 🚀 O que é o GIP Framework?

O GIP Framework é uma arquitetura de desenvolvimento orientado por IA para WordPress, com controle de versões, automações via GitHub, deploy remoto, painéis customizados e criação modular de plugins e microsites.

---

## 📁 Repositório Único: `gip-framework`

A partir da v1.5, todos os sistemas GIP ficam centralizados em **um único repositório GitHub** com subpastas para cada módulo:

- `manager/` → Plugin GIP WP Manager
- `site/` → Instalação base WordPress com layout GIP
- `cli/` → Scripts automatizados
- `packs/` → Instalação automática de pacotes
- `docs/` → Documentação, changelog, instruções

---

## 📦 Plugins Oficiais

### ✅ GIP WP Manager (v2.0)
- Backup (GDrive, FTP)
- Restauração remota
- Deploy via zip ou GitHub
- Integração JetEngine, SMTP, painel admin
- Inspirado no Softaculous

### ✅ GIP CLI
- `install-gip-v1.5.sh` → Instalação via shell
- `gip-sync.sh`, `gip-install-pack.sh` → Deploy remoto e packs

### ✅ GIP REST
- API para deploy, status, logs, backups

---

## 🌐 Sites GIP

- Instalação padronizada
- Pastas renomeadas:
  - `wp-content/` → `gip-system/`
  - `plugins/` → `modules/`
  - `themes/` → `layout/`
  - `uploads/` → `media/`
- Login customizado: `/gip-login`

---

## 📚 Comandos GPT Personalizado

```
/start-gip [nome] - [descrição]
/maintain-gip [nome]
/debug-gip [nome]
/git-snapshot vX.X - descrição
/git-pr branch - descrição
```

---

## 🧪 Testes e Versionamento

- `version.json`
- `changelog.md`
- Testes: PHPUnit, Cypress
- Deploy: GitHub Actions

---

## 🔐 Segurança e Padrões

- Nonces, CSRF, autenticação via token
- Logs por site
- Deploy via REST com chave segura

---

## 📄 Documentos Incluídos

- `README.md`
- `changelog.md`
- `version.json`
- `gip-framework-instrucoes.md`

---

## ✍️ Autor

Desenvolvido por **Thales Da Vinci**

[GitHub Oficial](https://github.com/thales-da-vinci/gip-framework)