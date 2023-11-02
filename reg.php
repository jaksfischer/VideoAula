<?php
include"conexao/conec.php";

/**
 * Verificações adicionais
 * Verifica se tem nome e email no POST
 */

if($_REQUEST["nome"] == "") {
    echo "O campo nome é obrigatório!";
    exit;
}

if($_REQUEST["email"] == "") {
    echo "O campo email é obrigatório!";
    exit;
}

$nome   = trim($_REQUEST["nome"]);
$email  = trim($_REQUEST["email"]);

$sql = "INSERT INTO usuario (nome, email) VALUES (:nome, :email)";
$ins = $pdo->prepare($sql);

/**
 * O bindparam associa um valor para um espaço reservado nomeado ou de ponto de interrogação na instruição do SQL
 */
$ins->bindParam(":nome", $param_nome, PDO::PARAM_STR);
$ins->bindParam(":email", $param_email, PDO::PARAM_STR);

$param_nome     = $nome;
$param_email    = $email;

try {
    if($ins->execute()) {
        echo'
        Cadastrado com sucesso.<br />
        <a href="./" title="Voltar">Página Inicial</a>
        ';
    } else {
        throw new PDOException("Erro, tente novamente!");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}