<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>
    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM alunos WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>

<div class="container border rounded mt-5 pt-3 bg-white">
    <form action="../controllers/atualizarAluno.php" method="post">
        <div class="row mt-3">

        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">

        <div class="col">
        <label form="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
        </div>

        <div class="col">
        <label form="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
        </div>
        </div>

       <label form="form-check-input">Masculino
       <input class="radio-inline" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>><br><br>

        <label form="form-check-input">Feminino
        <input class="radio-inline" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>><br><br>


        <input class="mt-2 mb-3 btn btn-success" type="submit" value="Atualizar">
    </form>

    <?php } ?>
    </div> 
<?php include("blades/footer.php") ?>