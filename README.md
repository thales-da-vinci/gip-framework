# 🧠 GIP Framework - Guided Iterative Precision

O **GIP Framework** é um ecossistema completo para criar, versionar, testar e automatizar plugins e microsistemas em WordPress com ajuda de IA, GitHub Actions e estrutura modular.

---

## 📚 O que é o GIP?

GIP (Guided Iterative Precision) é um método de desenvolvimento inteligente que garante:

✅ Clareza no planejamento  
✅ Segurança e versionamento sem perdas  
✅ Testes automatizados  
✅ Código modular e escalável  
✅ Integração com GitHub, Elementor, JetEngine e REST API

---

## ⚙️ Comandos Suportados no GPT

- `/start-gip [Nome] - [Objetivo]`
- `/maintain-gip [Nome]`
- `/debug-gip [Nome]`
- `/git-snapshot vX.X - changelog`
- `/git-pr branch - mensagem`
- `/install-pack nome`
- `/generate-widget nome`

---

## 🧩 Estrutura do Ecossistema

| Repositório       | Descrição |
|--------------------|-----------|
| `gip-core`         | Núcleo do framework e automações |
| `gip-packs`        | Packs com plugins prontos e scripts |
| `gip-sites`        | Modelos de sites com stack GIP |
| `gip-control`      | Painel de gerenciamento remoto via REST |
| `gip-widgets`      | Widgets personalizados para Elementor |
| `gip-cli`          | Scripts de linha de comando (instalação, deploy etc) |
| `gip-installer`    | Plugin de instalação automática |
| `gip-examples`     | Exemplos práticos versionados |
| `gip-tests`        | Testes automatizados com CI/CD |

---

## 📦 Instalação de Plugin GIP

```bash
./gip-instalar-plugin-zip.sh
```

Ou para instalar packs:

```bash
./gip-install-pack.sh --pack=Desenvolvimento
```

---

## 🚀 Automatização GitHub

- GitHub Actions com `.gip-action.yml` e `gip-automation.yml`
- Integração com changelog automático
- Criação de versões (snapshot), releases e pull requests

---

## 🧠 Como usar com GPT Customizado

Importe o arquivo:
[`GIP_DEV_ASSISTANT_PROMPT_FINAL.json`](./GIP_DEV_ASSISTANT_PROMPT_FINAL.json)

Ou use o modelo completo em:
[`index.md`](./docs/index.md)

---

## 👨‍💻 Requisitos

- PHP 8.0+
- WordPress 6.2+
- Git + GitHub CLI
- WP-CLI (local ou servidor)

---

## 📎 Licença

MIT - Utilize livremente em seus projetos pessoais ou comerciais com atribuição.

---

Desenvolvido por: **Thales | GIP Framework**
