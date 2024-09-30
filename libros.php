<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros - Biblioteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h2 class="text-center">Libros</h2>
        <?php
        $servername = "sql5.freesqldatabase.com";
        $username = "sql5722742";
        $password = "zqZ3BkquzK";
        $dbname = "sql5722742";

          // Crear conexión
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Verificar conexión
          if ($conn->connect_error) {
              die("Conexión fallida: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM titulos";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Crear la tabla HTML y los encabezados
              echo "<table border='1'>
                      <tr>
                          <th>ID Título</th>
                          <th>Título</th>
                          <th>Tipo</th>
                          <th>ID Publicación</th>
                          <th>Precio</th>
                          <th>Avance</th>
                          <th>Total Ventas</th>
                          <th>Notas</th>
                          <th>Fecha Publicación</th>
                          <th>Contrato</th>
                      </tr>";
              // Salida de los datos de cada fila
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["id_titulo"] . "</td>
                          <td>" . $row["titulo"] . "</td>
                          <td>" . $row["tipo"] . "</td>
                          <td>" . $row["id_pub"] . "</td>
                          <td>" . $row["precio"] . "</td>
                          <td>" . $row["avance"] . "</td>
                          <td>" . $row["total_ventas"] . "</td>
                          <td>" . $row["notas"] . "</td>
                          <td>" . $row["fecha_pub"] . "</td>
                          <td>" . $row["contrato"] . "</td>
                        </tr>";
              }
              echo "</table>";
          } else {
              echo "0 resultados";
          }
          $conn->close();
          ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
