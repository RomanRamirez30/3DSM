<?php
include('conexion.php');
$sql = "SELECT * FROM documento";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Documentos</h1>
    <table class="table">      
  <thead class="bg-info">
            <tr>
                <th scope="col">ID</th>
                <th>Título</th>
                <th>Archivo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id_doc'] . "</td>";
                    echo "<td>" . $row['titulo'] . "</td>";
                    echo "<td><a href='archivos/" . $row['archivo'] . "'>" . $row['archivo'] . "</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay documentos</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
