<?php
$active = 3;
$title = "Aula - Edição";
include"header.php";
?>
<div class="container">
    <div class="edit">
        <table class="table">
            <thead class="table-light">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Ações</td>
            </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM usuario";
            $result = $pdo->prepare($sql);
            $result->execute();

            $usuarios = $result->fetchAll();

            foreach ($usuarios AS $user) {
                if($user["deleted_at"] != "") {
                    $delete = '';
                    $reactive = '<a class="green" href="activeUser.php?id=' . $user["id"] . '" title="Reativar"><i class="fa-solid fa-user-plus"></i></a>&nbsp;';
                } else {
                    $delete = '<a class="red" href="deleteUser.php?id=' . $user["id"] . '" title="Deletar"><i class="fa-solid fa-user-xmark"></i></a>&nbsp;';
                    $reactive = '';
                }
                echo '
            <tr>
                <td>
                    ' . $user["id"] . '
                </td>
                <td>
                    ' . $user["nome"] . '
                </td>
                <td>
                    ' . $user["email"] . '
                </td>
                <td>
                    <a class="normal" href="editUser.php?id=' . $user["id"] . '" title="Editar"><i class="fa-solid fa-user-pen"></i></a> &nbsp;
                    ' . $delete . '
                    ' . $reactive . '
                </td>
            </tr>
            ';
            }
            ?>
        </table>
    </div>
</div>


<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>