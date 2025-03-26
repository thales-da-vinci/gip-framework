# 🚀 GIP Framework – Guided Iterative Precision (v1.0)

![Status](https://img.shields.io/badge/status-ativo-green?style=flat-square)
![WordPress](https://img.shields.io/badge/WordPress-6.7%2B-blue?style=flat-square)
![Licença](https://img.shields.io/badge/licença-MIT-lightgrey?style=flat-square)

Este repositório contém a estrutura oficial do **GIP Framework**, um sistema para **desenvolvimento assistido por IA de plugins WordPress**, com foco em:

✅ Clareza de propósito  
✅ Evitar regressões e retrabalho  
✅ Versionamento com snapshots  
✅ Validação contínua com testes manuais e automatizados  
✅ Documentação completa do ciclo de vida do plugin  

---

## 📁 Estrutura da Pasta

```
gip-framework/
├── .gip-config/           → Templates e instruções internas do framework
├── frontend/              → Guias de boas práticas para CSS, JS, blocos Gutenberg
├── backend/               → Hooks, banco de dados, segurança e validação
├── smtp/                  → Diagnóstico e validação de servidores SMTP
├── versionamento/         → Snapshots e changelogs por versão
├── testes/                → Estratégias e exemplos com PHPUnit e Cypress
├── exemplos/              → Prompts reais aplicados em projetos anteriores
└── README.md              → Este arquivo
```

---

## 🧠 O que é o GIP?

> GIP = **Guided Iterative Precision Framework**

É um modelo criado para evitar o problema comum no uso de IA (como ChatGPT) na criação de plugins:  
📛 *"Melhorias que quebram funcionalidades já prontas."*

O GIP evita isso com um fluxo iterativo orientado por checkpoints, refinamento progressivo e documentação viva.

---

## 🛠️ Como Usar

1. Crie um novo projeto de plugin usando `/start-gip Nome - Objetivo`.
2. Use os modelos de prompt em `.gip-config/modelo-prompt.md`.
3. Aplique os testes recomendados em `/testes`.
4. Registre cada mudança em `/versionamento` com snapshots antes e depois.
5. Documente todas as etapas, inclusive erros, para alimentar a IA e evitar loops.

---

## 📌 Requisitos

- WordPress 6.0 ou superior
- PHP 7.4+
- Recomenda-se uso de Git + CI/CD (GitHub Actions)

---

## 🔖 Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo `LICENSE` para mais informações.

---

## 🤝 Contribuindo

Pull requests são bem-vindos!  
Sinta-se livre para sugerir melhorias, adicionar novos blocos de documentação ou reportar bugs.

---

## 🌐 Mais sobre o GIP

Você pode saber mais sobre o GIP Framework, incluindo o assistente AI que o acompanha, neste repositório ou pelo projeto Notion original (link opcional).