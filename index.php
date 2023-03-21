
<?php 
include("views/blades/header.php"); 
include("controllers/funcoes.php");
?>
<div class="container bg-white rounded mt-5 pt-3 pb-3 pe-3">
    <a href="views/cadastro.php"><button type="button" class="btn btn-success">Cadastrar</button></a>
    <hr>
    <form action="index.php" method="post">
        <input class="form-control" type="text" name="buscar" size="30" placeholder="Buscar">
    </form>
    <hr>

    <?php mostrarDados(); ?>
</div>

<? include("views/blades/footer.php") ?>
