<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
    $resultado = $conexion->query("SELECT id_equipo,nombre,ciudad FROM equipo");
}

print_r($_GET);
if($_GET["a"] === "") echo "a is an empty string\n";
if($_GET["a"] === false) echo "a is false\n";
if($_GET["a"] === null) echo "a is null\n";
if(isset($_GET["a"])) echo "a is set\n";
if(!empty($_GET["a"])) echo "a is not empty";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav>
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="insertarEquipo.php">Insertar Equipo</a></li>
            <li><a href="mostrarequipo.php">Mostrar equipo</a></li>

        </ul>
     </div>
    </nav>
        </nav>
    
<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Ciudad</td>
    </tr>
    <?php
     foreach ($resultado as $equipo) {
         echo "<tr>";
         echo "<td>".$equipo['id_equipo']."</td>";
         echo "<td>".$equipo['nombre']."</td>";
         echo "<td>".$equipo['ciudad']."</td>";
         echo "</tr>";
     }
    ?>
 </table>
 
    </div>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>