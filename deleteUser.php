<?php
include"conexao/conec.php";

if(emptY($_REQUEST["id"])) {
    echo "
    <h5>Esta página somente pode ser acessada clicando em deletar em um dos usuários!<h5><br />
        <a href='edit.php'>Voltar</a>";
    exit;
}

$sql = "UPDATE usuario SET deleted_at = :deleted WHERE id = :id";
$del = $pdo->prepare($sql);

$del->bindParam(":deleted", $param_deleted, PDO::PARAM_STR);
$del->bindParam(":id", $param_id, PDO::PARAM_INT);

$param_deleted  = date('Y-m-d H:i:s');
$param_id       = $_REQUEST["id"];

try {
    if($del->execute()) {
        echo "Registro deletado com sucesso!<br /><a href='edit.php'>Voltar</a>";
    } else {
        throw new PDOException();
    }
} catch (PDOException $e) {
    echo "Ocorreu um erro, tente novamente! Error msg: " . $e->getMessage();
}