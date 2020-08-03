<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <form method="POST" action="PHPcadastroEmail.php">
    <h1>Cadastrando Alunos</h1>
    <input type="text" placeholder="Email" name="Email" required>
    <input type="submit" name="Enviar"> 
    </form>
    <?php
        include("PHPcadastroEmail.php");
    ?>
</body>
</html>