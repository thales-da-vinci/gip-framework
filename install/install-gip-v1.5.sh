#!/bin/bash

echo "🔧 Instalador GIP Framework - Site + WP Manager"

read -p '📁 Caminho do WordPress (ex: /var/www/meusite): ' WP_PATH

echo "📦 Instalando GIP WP Manager..."
unzip -o gip-wp-manager-v1.5.0.zip -d "$WP_PATH/gip-system/modules/"

echo "📦 Instalando GIP Site Base..."
unzip -o gip-site-v1.5.0.zip -d "$WP_PATH"

echo "✅ Instalação finalizada!"
echo "👉 Acesse o painel do GIP WP Manager para gerenciar os microsites."