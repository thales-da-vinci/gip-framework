
# ✅ Validação de Envio SMTP (Nova Etapa GIP v1.2)

Esta etapa deve ser aplicada sempre que o plugin envolver **envio de e-mails**, como formulários, notificações automáticas ou integrações com SMTP.

---

## 🔧 3️⃣ Planejamento Técnico (expandido)

✅ **Envio de E-mail e Verificação SMTP:**

- Verificar se o plugin usará `wp_mail()` ou envio via SMTP direto (PHPMailer, etc).
- Definir se será necessário integrar com plugin como **WP Mail SMTP**.
- Incluir campos para credenciais SMTP no admin (se aplicável).
- Adicionar fallback com aviso de falha no envio.
- ⚠️ **IMPORTANTE:** Confirmar que o hostname configurado no SMTP **corresponde ao CN do certificado SSL** (evita `stream_socket_enable_crypto()` error).
- Testar o hostname real com `openssl s_client -connect host:port` (avançado).

---

## 🧪 6️⃣ Testes e Validação (novo checklist)

🔲 **Testes de Envio SMTP**

- [ ] Testar envio de e-mail com `wp_mail()` + plugin SMTP configurado.
- [ ] Validar hostname correto do servidor SMTP (ex: `smtp-vip.uni5.net`).
- [ ] Garantir que o certificado SSL não cause erro de CN mismatch.
- [ ] Verificar que o e-mail é entregue corretamente e não cai em SPAM.
- [ ] Habilitar logs detalhados no WP Mail SMTP (Ferramentas > Depuração).

---

## 💡 Dica Técnica:

> Em ambientes com SMTP personalizado, use o nome do host que está no certificado SSL (CN ou SAN). Se ocorrer erro de verificação TLS, ajuste o campo "Host" nas configurações SMTP para corresponder exatamente ao domínio certificado.

---

## 📌 Changelog GIP Framework v1.2

```
Versão 1.2 - Adicionada Verificação de SMTP
- Incluída etapa de validação de envio SMTP no planejamento técnico.
- Criado checklist para verificação de certificados e hostnames SSL.
- Adicionado fallback e testes de entrega de e-mail como padrão no GIP.
```
