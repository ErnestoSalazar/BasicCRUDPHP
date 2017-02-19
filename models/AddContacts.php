<?php
include 'Connection.php';
$db = Connection::getInstancia();
$conn = $db->getConexion();


$name   = $_POST["name"];
$age    = $_POST["age"];
$email  = $_POST["email"];
$cell   = $_POST["cell"];

if(!is_numeric($name)) {

    $sql = "INSERT INTO contact (name,age, email, cell) VALUES ('$name','$age','$email','$cell');";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php?error=datanotsaved");
    }
}
else{
    header("Location: ../index.php?error=datanotsaved");
}
?>