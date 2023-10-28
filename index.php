<?php
include"conexao/conec.php";
?>
<html>
<head>
    <title>Aula - Conexão com o banco em PDO</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM usuario";
    $result = $pdo->prepare($sql);
    $result->execute();

    $usuarios = $result->fetchAll();

    foreach ($usuarios AS $user) {
        echo '
            ID: ' . $user["id"] . '<br />
            Nome: ' . $user["nome"] . '<br />
            Email: ' . $user["email"] . '<br />
            <hr />
            ';
    }
?>
</body>
</html>
