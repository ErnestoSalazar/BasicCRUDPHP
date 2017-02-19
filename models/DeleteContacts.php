<?php
    include 'Connection.php';
    $db = Connection::getInstancia();
    $conn = $db->getConexion();

    $num = $_POST['num'];

    $sql = "DELETE FROM contact WHERE id='$num'";

    if ($conn->query($sql) === TRUE) {
        echo "Contact deleted";
    } else {
        echo "Error deleting contact";
    }

?>