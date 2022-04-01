<?php 
session_start();
if($_POST){
    $_SESSION['nome'] = $_POST['nome'];
} 
?>
<form method="post">
    Nome: <input type="text" name="nome">
<br>
<button>Entrar</button>
</form>