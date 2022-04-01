<<?php 
session_start();
if (!isset ($_SESSION['nome'])){
    header('location: pagina1.php');
}
echo '<h1>Bem Vindo(a)';
echo $_SESSION['nome'].'</h1>'
?>
<form method="post">
    <fieldset>
        <legend>Pergunta 1</legend>
            Quanto é ((3*5²)+6)*0?
        <input type="text" name="p1"><br>
        <button>Próxima</button>
    </fieldset>
</form>
<<?php 
if($_POST){
    if(!isset($_POST['p1'])){
        header('location: pagina2.php');
    }
    else{
        $_SESSION['p1'] = $_POST['p1'];
        header('location: pagina3.php');
    }
} 
?>
