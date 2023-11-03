<?php
session_start();
    require_once("mysql_connect.php");

    $nome = mysqli_real_escape_string($con, $_POST["nome"]);
    $mensagem = mysqli_real_escape_string($con, $_POST["texto"]);

    if(isset($nome)){
        $sql = "INSERT INTO contato (nome, mensagem) VALUES ('$nome', '$mensagem')";
        mysqli_query($con, $sql);

        echo "Enviado com sucesso!";
        $_SESSION["enviado"] = "<span>Mensagem enviada!</span>";
        header("Location: index.php?pagina=contato.php#conteudo");

    } else {
        echo "Mensagem não enviada<br>";
        echo "<a href='index.php?pagina=contato.php#conteudo'>Voltar</a>";
    }
?>