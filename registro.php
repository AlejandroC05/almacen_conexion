<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

	<h1>Registros</h1>
	<form action="validar.php" method="POST">
		<label for="nombre">Producto:</label>
		<input type="text" id="producto" name="producto" required><br><br>
		<label for="autor">Precio:</label>
		<input type="text" id="precio" name="precio" required><br><br>
		<label for="precio">Descripcion:</label>
		<input type="text" id="descripcion" name="descripcion" required><br><br>
        <label for="">Categoria:</label>
        <select class="form-select mb-3"  name="categoria">
            <option selected disabled>--Seleccionar categoria--</option>
            <?php
                include 'conexion.php';

                $sql = $conn->query("SELECT * FROM categorias");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['id_categoria']."'>".$resultado['categoria']."</option>";
                }
            ?> <br>

		<input type="submit" value="Enviar">
		<button><a href="index.php">Mostar datos</a></button>
	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>