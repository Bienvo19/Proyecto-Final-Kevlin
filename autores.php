<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores - Biblioteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h2 class="text-center">Autores</h2>
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

        $sql = "SELECT * FROM autores";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Crear la tabla HTML y los encabezados
            echo "<table border='1'>
                    <tr>
                        <th>ID Autor</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>Código Postal</th>
                    </tr>";
            // Salida de los datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_autor"] . "</td>
                        <td>" . $row["apellido"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["telefono"] . "</td>
                        <td>" . $row["direccion"] . "</td>
                        <td>" . $row["ciudad"] . "</td>
                        <td>" . $row["estado"] . "</td>
                        <td>" . $row["pais"] . "</td>
                        <td>" . $row["cod_postal"] . "</td>
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
