<?php
/**
 * Bootstrap para testes do GIP Framework.
 * Atualmente sem plugin definido. Este arquivo será usado em projetos futuros.
 */

$_tests_dir = getenv('WP_TESTS_DIR') ?: '/tmp/wordpress-tests-lib';

if (!file_exists("{$_tests_dir}/includes/functions.php")) {
    echo "⚠️ Biblioteca de testes do WordPress não encontrada em {$_tests_dir}
";
    exit(1);
}

// Carrega funções do WP test suite
require_once $_tests_dir . '/includes/functions.php';

// Nenhum plugin definido ainda. Esta função será atualizada em futuros projetos.
function _manually_load_plugin() {
    // require dirname(__FILE__) . '/../meu-plugin.php';
}

tests_add_filter('muplugins_loaded', '_manually_load_plugin');

// Inicializa o ambiente de testes
require $_tests_dir . '/includes/bootstrap.php';