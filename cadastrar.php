<?php
include 'dao/cadastrar.php';

    $tusuario = $_POST['usuario'];
    $tsenha = $_POST['senha'];
    $senhaCript= md5($tsenha);
    cadastrar($tusuario, $senhaCript);
?>