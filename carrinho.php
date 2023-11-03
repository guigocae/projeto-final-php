<?php 
    if(isset($_SESSION["show"])){
?>

    <div class="corpo" id="conteudo">
      <div class="boxes box-ingresso">
        <ul>
            <p class="titulo-box">Ingresso</p>
            <li>Show: <?php echo $_SESSION["show"]; ?></li>
            <li>Setor: <?php echo $_SESSION["setor"]; ?></li>
            <li>Valor: <?php echo "<strong>R$".$_SESSION["ingresso_padrao"].",00</strong>"; ?></li>
        </ul>
        <ul>
            <p class="titulo-box">Descontos</p>
            <li>Plano <?php echo $_SESSION["plano"] ?></li>
            <?php echo $_SESSION["desconto"]; ?>
        </ul>
        <p>Total: 
            <?php 
                echo "<strong>R$".number_format((float)$_SESSION["ingresso"], 2, ",", ".")."</strong>"; 
            ?>
        </p>
      </div>  
    </div>
    
<?php } else { ?>

    <div class="comprar">
        <h3 class="titulo-box">Compre seu ingresso!</h3>
    </div>

<?php } ?>


