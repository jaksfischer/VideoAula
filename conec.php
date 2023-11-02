<?php
/**
 * Crédito:
 * Conexão com o banco de dados
 * 28/10/2023
 * ProgrammerBr
 * htpps://youtube.com.br/programmerbr
 * programmerbr.15@gmail.com
 */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'aula');
date_default_timezone_set('America/Sao_Paulo');

/**
 * Tentativa de conexão
 */

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";charset=utf8;dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /**
     * ATTR_ERRMODE: Modo de relatório de erros do PDO
     * ERRMODE_EXCEPTION: Lançar PDOExceptions
     */

    return $pdo;
} catch (PDOException $e) {
    /**
     * Em caso de erro, ele finaliza a conexão e retornar a mensagem de erro pro usuário.
     */
    die('Erro: não foi possível conectar ao banco. Error msg: ' . $e->getMessage());
}