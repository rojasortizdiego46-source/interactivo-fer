<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tabla</title>
    <style>
        #tabla th, #tabla td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;

        }
        #tabla {
            width: 100%;
            border-collapse: collapse;

        }
  body {
            background-image: url('img/Espacio.jpg');
font-family: 'Times New Roman', Times, serif;        }

         #btnEnviar:hover {
            background-color: #1d3b8a;
        }
        #btnEnviar {
            background-color: #2a52be;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btn:hover {
            background-color: #1d3b8a;
        }
td, tr{
    color:#ffffff;
        font-family: 'Times New Roman', Times, serif;
}
    </style>
</head>
<body>

<?php
include('conexion.php');

$resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM visita");

if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
    exit;
}
?>

<table id="tabla">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Comentario</th>
    </tr>

    <?php
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['comentario'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

<?php
mysqli_close($conexion);
?>
<form method="post" action="index.html">
    <center>
    <p><input id="btnEnviar" type="submit" value="Regresar al interactivo"></p>
</center>
</body>
</html>