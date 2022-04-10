<?php
include 'dao/logar.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    logar($usuario, $senha);
?>