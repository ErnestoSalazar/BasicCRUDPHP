<?php
    include 'models/Connection.php';
    $db = Connection::getInstancia();
    $conn = $db->getConexion();

    $sql = "SELECT id, name, age, email, cell FROM contact";

    $result = mysqli_query($conn, $sql);

    if(! $result){
        echo "cant get data";
    }

    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>{$row[0]}</td>";
        echo "<td>{$row[1]}</td>";
        echo "<td>{$row[2]}</td>";
        echo "<td>{$row[3]}</td>";
        echo "<td>{$row[4]}</td>";
        echo "<td><button type='button' data-toggle='modal' data-target='#changeContact' class='red-button blue-button edit-option'>Modificar</button><button class='red-button delete-option'>Borrars</button></td>";
        echo "</tr>";
    }
?>