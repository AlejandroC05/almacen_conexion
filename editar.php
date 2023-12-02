<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<h1 class="text-center" style= "background-color: black; color: white; borderadius: 5px" >EDITAR PRODUCTOS</h1>
<br>

<form class="container" action="editarp.php" method="POST">

    <?php 
        include 'conexion.php';
        $sql = "SELECT * FROM  productos WHERE id_productos = ".$_REQUEST['id_productos'];
        $resultado = $conn ->query($sql);
        $row =$resultado->fetch_assoc();
    ?>

    <input type="hidden" class="form-control" name="id_productos" value="<?php echo $row['id_productos'];?>">


    <div class="mb-3">
        <label class="form-label">Producto</label>
        <input type="text" class="form-control" name="producto" value="<?php echo $row['producto'];?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="text" class="form-control" name="precio" value="<?php echo $row['precio'];?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'];?>">
    </div>

    <option selected>--Seleccione categoria --</option>
    <select class="form-select mb-3" aria-label="Default select example" name="id_categoria">
        <option selected disbaled>--Seleccione categoria --</option>
          <?php
            include 'conexion.php';

            $sql1 = "SELECT * FROM categorias WHERE id_categoria=".$row['id_categoria'];
            $resultado1 = $conn->query($sql1);

            $row1 = $resultado1->fetch_assoc();

            echo "<option selected value='".$row1['id_categoria']."'>".$row1['categoria']."</option>";

            $sql2 = "SELECT * FROM categorias";
            $resultado2 = $conn->query($sql2);

            while ($Fila = $resultado2->fetch_array()) {
                echo "<option value='".$Fila['id_categoria']."'>".$Fila['categoria']."</option>";
            }
         ?>
    </select>
 
    <button type="submit" class="btn btn-warning">Modificar</button>
    <a href="index.php"class="btn btn-success">Regresar</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>