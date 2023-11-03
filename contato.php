<main class="comprar" id="conteudo">
    <h2 class="titulo-box titulo-contato">Preencha o Formulário: </h2>
    <form action="form_act.php" method="post" class="form-contato">
        <div class="nome">
            <label for="nome-form" id="nome-label">Digite seu nome: </label>
            <input type="text" name="nome" id="nome-form" max="100" required>
        </div>
        <div class="mensagem">
            <label for="mensagem-form" id="mensagem-label">Digite sua mensagem: </label>
            <textarea name="texto" id="mensagem-form" cols="40" rows="10" maxlength="255" required></textarea>
        </div>
        <input type="submit" value="Enviar" class="botao-enviar">
        <?php if(isset($_SESSION["enviado"])){echo $_SESSION["enviado"];} ?>
    </form>
</main>