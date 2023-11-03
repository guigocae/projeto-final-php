<?php
    session_start();
    $show = $_POST["show"];
    $plano = $_POST["plano"];
    $setor = $_POST["setor"];

    $valor_ingresso = [
        "Superior" => 490,
        "Pista" => 590,
        "Inferior" => 750,
        "Premium" => 980
    ];

    $descontos = [
        "Bronze"=> [
            "Superior"=> 0.2
        ],
        "Prata"=> [
            "Superior"=> 0.5,
            "Pista"=> 0.5,
            "Inferior"=> 0.25
        ],
        "Ouro"=> [
            "Superior"=> 0.75,
            "Pista" => 0.5,
            "Inferior"=> 0.25
        ],
        "Platina"=> [
            "Superior" => 1,
            "Pista" => 0.75,
            "Inferior" => 0.50,
            "Premium" => 0.25
        ],
        "Diamante"=> [
            "Superior" => 1,
            "Pista" => 1,
            "Inferior" => 0.75,
            "Premium" => 0.5
        ]
    ];


    foreach($valor_ingresso as $chave => $valor){
        if($chave == $setor){
            $ingresso_padrao = $valor;
        }
    }

    if(isset($descontos[$plano][$setor])){
        $desconto = $descontos[$plano][$setor];
        $ingresso = $ingresso_padrao - $ingresso_padrao * $desconto; 
    } else{
        $desconto = 0;
        $ingresso = $ingresso_padrao;
    }


    if($desconto == 0){
        $_SESSION["desconto"] = "<li>Este plano não tem descontos</li";
    } else {
        $desconto *= 100;
        $_SESSION["desconto"] = "<li>Desconto de <strong>$desconto%</strong> aplicado</li>";
    }


    $_SESSION["show"] = $show;
    $_SESSION["plano"] = $plano;
    $_SESSION["ingresso_padrao"] = $ingresso_padrao;
    $_SESSION["ingresso"] = $ingresso;
    $_SESSION["setor"] = $setor;


    header("Location: index.php?pagina=carrinho.php#conteudo");

?>