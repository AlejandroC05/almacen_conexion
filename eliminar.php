<?php
    include 'conexion.php';

    $id = $_REQUEST['id_productos'];
    $sql = "DELETE FROM productos WHERE id_productos ='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location: index.php");
    }
?>