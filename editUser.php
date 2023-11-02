<?php
$active = 3;
$title = "Aula - Edição";
include"header.php";
?>
<div class="container">
    <?php
    if(empty($_REQUEST["id"])) {
        echo "<h3>Esta página somente pode ser acessada ao selecionar a ação editar de um dos usuários!</h3>
        <br /><a href='edit.php'>Voltar</a>";
        exit;
    } else {
        $sql = "SELECT * FROM usuario WHERE id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(":id", $param_id, PDO::PARAM_INT);

        $param_id = $_REQUEST["id"];

        if(!$res->execute()) {
            echo "<h5>Ocorreu um erro, tente novamente.</h5><br /><a href='edit.php'>Voltar</a>";
            exit;
        } elseif($res->rowCount() < 1) {
            echo "<h5>Nenhum registro foi localizado.</h5><br /><a href='edit.php'>Voltar</a>";
            exit;
        } else {
            $user = $res->fetchObject();
        }
    }
    ?>
    <section class="cadastro">
        <form method="post" action="alterUser.php">
            <div class="row">
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" autocomplete="off" required value="<?=$user->nome?>" />
                        <label for="nome">Nome</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="nome@email.com.br" autocomplete="off" required value="<?=$user->email?>" />
                        <label for="email">E-mail</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?=$user->id?>" />
            <button class="btn btn-success">Cadastrar</button>
        </form>
    </section>
</div>


<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>