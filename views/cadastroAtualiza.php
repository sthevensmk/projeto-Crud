<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>
    <div class="container border rounded mt-3 bg-white">    
        <form action="../controllers/atualizarAluno.php" method="post">
            <div class="row mt-3">                                 
                    <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">                                  
                <div class="col">
                    <label class="form-label">Nome</label>
                    <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>">
                </div>                 
                <div class="col">
                    <label class="form-label">Cidade</label>
                    <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br> 
                </div>
            </div>
            <input class="form-check-input" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>><label class="radio-incline"> Masculino</label></input><br>
            <input class="form-check-input" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>><label class="radio-incline"> Feminino</label></input><br>
            <input class="mt-2 mb-3 btn btn-success" type="submit" value="Atualizar"></input>
            <input class="mt-2 mb-3 btn btn-secondary" type="submit"  value="Voltar" href="../index.php"></input>
        </form>
    </div>
        
    <?php } ?>

<?php include("blades/footer.php") ?>
