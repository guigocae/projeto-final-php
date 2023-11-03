<main class="comprar" id="conteudo">
    <h2 class="titulo-box">Comprar Ingresso:</h2>
    <form action="comprar_act.php" method="post" class="formulario">
        <fieldset>
            <legend class="titulo-form">Selecione o show:</legend>
            <div class="jogo">
                <input type="radio" id="brunomars" name="show" value="Bruno Mars" required>
                <label for="brunomars">Bruno Mars</label>
            </div>
            <div class="jogo">
                <input type="radio" id="coldplay" name="show" value="Coldplay">
                <label for="coldplay">Coldplay</label>
            </div>
            <div class="jogo">
                <input type="radio" id="u2" name="show" value="U2">
                <label for="u2">U2</label>
            </div>
        </fieldset>
        <fieldset id="plan">
            <legend class="titulo-form">Selecione o plano:</legend>
            <div class="plano">
                <input type="radio" id="semplano" name="plano" value="Básico" required>
                <label for="semplano">Plano Básico</label>
            </div>
            <div class="plano">
                <input type="radio" id="bronze" name="plano" value="Bronze" required>
                <label for="bronze">Plano Bronze</label>
            </div>
            <div class="plano">
                <input type="radio" id="prata" name="plano" value="Prata">
                <label for="prata">Plano Prata</label>
            </div>
            <div class="plano">
                <input type="radio" id="ouro" name="plano" value="Ouro">
                <label for="ouro">Plano Ouro</label>
            </div>
            <div class="plano">
                <input type="radio" id="platina" name="plano" value="Platina">
                <label for="platina">Plano Platina</label>
            </div>
            <div class="plano">
                <input type="radio" id="diamante" name="plano" value="Diamante">
                <label for="diamante">Plano Diamante</label>
            </div>
        </fieldset>
        <fieldset>
            <legend class="titulo-form">Selecione o setor:</legend>
            <div class="setor">
                <input type="radio" id="superior" name="setor" value="Superior" required>
                <label for="superior">Cadeira Superior</label>
            </div>
            <div class="setor">
                <input type="radio" id="pista" name="setor" value="Pista">
                <label for="pista">Pista</label>
            </div>
            <div class="setor">
                <input type="radio" id="inferior" name="setor" value="Inferior">
                <label for="inferior">Cadeira Inferior</label>
            </div>
            <div class="setor">
                <input type="radio" id="premium" name="setor" value="Premium">
                <label for="premium">Pista Premium</label>
            </div>
        </fieldset>
        <div class="submit"><input type="submit" value="Enviar" class="botao-enviar"></div>
    </form>     
</main>