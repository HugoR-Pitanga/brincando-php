<?php
function cadastrar($usuario, $senha) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "estoque";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuario (Idusuario, Usuario, Senha) VALUES (null, '$usuario', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>