<?php
function consultar() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "estoque";


  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT Idusuario, Usuario FROM usuario";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["Idusuario"]. " - Usuario: " . $row["Usuario"]."<br>";
    }
  } else {
      echo "0 results";
  }
  $conn->close();
}
?>