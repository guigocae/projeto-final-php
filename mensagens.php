<?php
session_start();
    require_once("mysql_connect.php");

    $sql = "SELECT * FROM contato;";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Recursive&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mensagens.css">

    <style>
        .voltar-button {
            color: var(--rosa);
        }
    </style>

</head>
<body>
    <main id="mensagens">
        <?php
            while ($row = mysqli_fetch_array($result)){
        ?>

            <div class="box-mensagem">
            <p class="titulo-box-mensagem"><?php echo $row["nome"]; ?></p>
            <p><?php echo $row["mensagem"]; ?></p>
            </div>

        <?php
            }
        ?>

        <a href="index.php" class="voltar-button">Voltar</a>
    </main>
    
</body>
</html>