<?php
$active = 2;
$title = "Aula - Registrar";
include"header.php";
?>
<div class="container">
    <section class="cadastro">
        <form method="post" action="reg.php">
            <div class="row">
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" autocomplete="off" required />
                        <label for="nome">Nome</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="nome@email.com.br" autocomplete="off" required />
                        <label for="email">E-mail</label>
                    </div>
                </div>
            </div>
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