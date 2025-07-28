<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Donaciones</title>
</head>
<body>
  <h1>Formulario de Donación</h1>
  <form action="procesar_donacion.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br>

    <label>Monto a donar:</label><br>
    <input type="number" name="monto" min="1000" required><br>

    <input type="submit" value="Donar">
  </form>
</body>
</html>
