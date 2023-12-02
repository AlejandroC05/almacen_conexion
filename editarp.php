<?php

include 'conexion.php';

$id_productos = $_POST['id_productos'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$id_categoria = $_POST['id_categoria'];

$sql= "UPDATE productos SET
producto ='".$producto."',
precio ='".$precio."',
descripcion ='".$descripcion."',
id_categoria ='".$id_categoria."'
WHERE id_productos ='".$id_productos."'"; 
  
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

?>