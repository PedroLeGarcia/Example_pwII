<?php
    session_start();
    session_destroy();
    header('location: pagina1.php')
?>