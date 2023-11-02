<?php
include"conexao/conec.php";

if(empty($_REQUEST["nome"]) || empty($_REQUEST["email"]) || empty($_REQUEST["id"])) {
    echo "<h5>Os campos nome e email precisam estar preenchidos.</h5><a href='edit.php'>Voltar</a>";
    exit;
}

$sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
$res = $pdo->prepare($sql);

$res->bindParam(":nome", $param_nome, PDO::PARAM_STR);
$res->bindParam("email", $param_email, PDO::PARAM_STR);
$res->bindParam(":id", $param_id, PDO::PARAM_INT);

$param_nome     = $_REQUEST["nome"];
$param_email    = $_REQUEST["email"];
$param_id       = $_REQUEST["id"];

try {
    if($res->execute()) {
        echo "Registro alterado com sucesso!<br /><a href='edit.php'>Voltar</a>";
    } else {
        throw new PDOException();
    }
} catch (PDOException $e) {
    echo "Ocorreu um erro! Error msg: " . $e->getMessage();
}