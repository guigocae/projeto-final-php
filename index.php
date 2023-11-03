<?php
    session_start();
    $pg = (!isset($_GET["pagina"])) ? "?pagina=index.php" : $_GET["pagina"];
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Recursive&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/boxes.css">
    <link rel="stylesheet" href="css/comprar.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="css/contato.css">

    <style>
        .menu {
        color: aliceblue !important; 
        text-decoration: underline !important;
        }
        .menu:hover {
            color: aliceblue;
        }
    </style>       
</head>
<body>
    <div class="container">
        <?php 
            include("header.php");
        
            //página dinâmica
            $pagina = (isset($_GET['pagina'])) ? include($_GET['pagina']) : include("shows.php");
            $pagina;

        ?>
    
    </div>
    <script src="https://kit.fontawesome.com/9fa94335b9.js" crossorigin="anonymous"></script>
</body>
</html>