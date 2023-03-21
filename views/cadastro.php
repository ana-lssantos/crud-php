<?php include("blades/header.php") ?>
<div class="container border rounded mt-5 pt-3 bg-white">

    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row mt-3">

        <div class="col">
        <label form="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome">
        </div>

        <div class="col">
        <label form="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade"><br>
        </div>
        </div>      

        <label form="form-check-input">Masculino
        <input class ="radio-inline" type="radio" value="m" name="alunoSexo"><br><br>

        <label form="form-check-input">Feminino
        <input class="radio-inline" type="radio" value="f" name="alunoSexo"><br><br>

        <input class="mt-2 mb-3 btn btn-success" type="submit" value="Cadastrar">
    </form>

</div>
<?php include("blades/footer.php") ?>