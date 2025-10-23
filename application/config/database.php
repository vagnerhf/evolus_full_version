<?php

defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = true;
/*
$db['default'] = [
    'dsn' => $_ENV['DB_DSN'] ?? '',
    'hostname' => $_ENV['DB_HOSTNAME'] ?? 'enter_hostname',
    'username' => $_ENV['DB_USERNAME'] ?? 'enter_db_username',
    'password' => $_ENV['DB_PASSWORD'] ?? 'enter_db_password',
    'database' => $_ENV['DB_DATABASE'] ?? 'enter_database_name',
    'dbdriver' => $_ENV['DB_DRIVER'] ?? 'mysqli',
    'dbprefix' => $_ENV['DB_PREFIX'] ?? '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => $_ENV['DB_CHARSET'] ?? 'utf8',
    'dbcollat' => $_ENV['DB_COLLATION'] ?? 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true,
]


$db['default'] = [
    'dsn'      => '',
    'hostname' => 'mariadb',  // ← Nome do serviço no docker-compose
    'port'     => '3306',     // ← Porta INTERNA do container
    'username' => 'root',
    'password' => '1234',
    'database' => 'evolus',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'development'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
];
*/

// Detectar caminho do banco de dados
$database_path = APPPATH . '/database/evolus.sqlite';

// Criar diretório se não existir
$database_dir = dirname($database_path);
if (!is_dir($database_dir)) {
    mkdir($database_dir, 0755, true);
}

// Criar banco vazio se não existir
if (!file_exists($database_path)) {
    $db_handle = new SQLite3($database_path);
    $db_handle->close();
}

$db['default'] = array(
    'dsn'          => '',
    'hostname'     => '',
    'username'     => '',
    'password'     => '',
    'database'     => $database_path,
    'dbdriver'     => 'sqlite3',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => (ENVIRONMENT !== 'development'),
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);


