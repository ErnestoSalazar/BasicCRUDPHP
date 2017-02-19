<?php
    include 'Connection.php';
    $db = Connection::getInstancia();
    $conn = $db->getConexion();

    $num    = $_POST['num'];
    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $email  = $_POST['email'];
    $cell   = $_POST['cell'];

    if(!is_numeric($name)) {
        $sql = "UPDATE contact SET name = '$name', age='$age', email='$email', cell='$cell' WHERE id='$num'";

        if ($conn->query($sql) === TRUE) {

        } else {

        }
    }
    else{
        header("Location: ../index.php?error=datanotsaved");
    }
?>