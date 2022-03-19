<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(VIEW_PATH . '/login.php');

require_once(MODEL_PATH . '/Login.php');

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo 'Logado.';
} catch (Exception $e) {
    echo 'Problema no login.';
}