<?php
    session_start();
    if (!isset ($_SESSION['nome'])){
        header('location: pagina1.php');
    }
    echo "Pagina restrita, bem viado".$_SESSION['nome'];
?>
<form method="post">
    <fieldset>
        <legend>Pergunta 2</legend>
            Em um avião quatros romanos e um inglês, qual é o nome do(a) piloto(a)?
            <br>
                <select name='p2'>
                    <option value="Gu">Gustavo</option>
                    <option value="Alan">Alan</option>
                    <option value="Ivone">Ivone</option>
                </select>
            <br>
        <button>Próxima</button>
    </fieldset>
</form>