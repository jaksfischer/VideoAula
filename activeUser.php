<?php
include"conexao/conec.php";

if(emptY($_REQUEST["id"])) {
    echo "
    <h5>Esta página somente pode ser acessada clicando em reativar em um dos usuários!<h5><br />
        <a href='edit.php'>Voltar</a>";
    exit;
}

//$sql = "DELETE FROM usuario WHERE id = :id"; #Isto realmente exclui o dado do banco

$sql = "UPDATE usuario SET deleted_at = :deleted WHERE id = :id";
$act = $pdo->prepare($sql);

$act->bindParam(":deleted", $param_deleted, PDO::PARAM_STR);
$act->bindParam(":id", $param_id, PDO::PARAM_INT);

$param_deleted  = NULL;
$param_id       = $_REQUEST["id"];

try {
    if($act->execute()) {
        echo "Registro reativado com sucesso!<br /><a href='edit.php'>Voltar</a>";
    } else {
        throw new PDOException();
    }
} catch (PDOException $e) {
    echo "Ocorreu um erro, tente novamente! Error msg: " . $e->getMessage();
}