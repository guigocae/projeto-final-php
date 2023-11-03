<?php 
    $menu = [
        'Shows'=>'shows.php', 
        'Planos'=>'planos.php', 
        'Comprar'=>'comprar.php', 
        'Carrinho'=>'carrinho.php', 
        'Contato'=>'contato.php'
    ];
?>

<header>
        <div class="top-nav">
            <h1><a href="/">Ingressos</a></h1>
            <div class="top-nav-child">
                <a href="mensagens.php"><i class="fa-solid fa-envelope"></i></a>
                <a href="sobre.php">Sobre</a>
                <a href="limpar.php">Limpar</a>
            </div>
        </div>
        <div class="banner">
            <h1 class="titulo">Ingressos para shows</h1>
            <span class="descricao">Compre seu ingresso!</span>
        </div>
        <div class="bottom-nav">
            <?php 
                //menu dinâmico
                foreach($menu as $chave => $valor) {
                    if($pg == $valor) {
                        echo '<a href="?pagina='.$valor.'#conteudo" class="menu">'.$chave.'</a>';
                    } else {
                        echo '<a href="?pagina='.$valor.'#conteudo">'.$chave.'</a>';
                    }
                }
            ?>
        </div>
</header>