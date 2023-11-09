<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consultas</title>
</head>

<body>
    <?php
    require_once "DAL/consulta.php";
    $query = "select id, nombre, telefono, correo, detalle from consultas";
    $consultas = getArrayConsulta($query);
    echo "<div>";
    echo "<h3>Lista de Consultas</h3>";
    echo "<table width=50%>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Telefono</th>";
    echo "<th>Correo</th>";
    echo "<th>Detalle</th>";
    echo "</tr>";
    if (!empty($consultas)) {
        foreach ($consultas  as $consulta) {
            echo "<tr>";
            echo "<td>" . $consulta['nombre'] . "</td>";
            echo "<td>" . $consulta['telefono'] . "</td>";
            echo "<td>" . $consulta['correo'] . "</td>";
            echo "<td>" . $consulta['detalle'] . "</td>";
            echo "<td><a href=mostrarAlumno.php?id={$consulta['id']}>Ver Consulta</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td>No hay Consultas</td></tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
</body>

</html>