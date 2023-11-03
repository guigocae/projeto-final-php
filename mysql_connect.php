<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "base_de_dados";

    $con = mysqli_connect($hostname, $user, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Não foi possível conectar-se". mysqli_connect_error();
    }

?>