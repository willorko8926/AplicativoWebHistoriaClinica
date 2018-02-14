<?php
  session_start();
?>
<html lang="es">
<head>
<style>
    table, td, th {
        border: 1px solid black;
    }
    table {
        border-collapse: collapse;
        width: 80%;
    }
    th, td{
        text-align: left;
        padding: 5px;
    }
</style>
</head>
<body>
    <header>
    </header>
    <h2>Administración de Paises</h2>
    <table>
    <tr>
        <th>Código País</th>
        <th>Nombre del país</th>
        <th><a href="paisCreate.php">Crear nuevo País</a></th>
    </tr>
<?php
    include_once("CPaisCollector.php");
    $id = 1;
    $lobPaisCollector = new CPaisCollector();
    foreach ($lobPaisCollector->selectALL() as $r){
        echo "<tr>";  //preguntar si hay que poner el pk o id aquí
        echo "    <td class='col_left_10'>".$r->getCodigoPais()."</td>";
        echo "    <td class='col_left_10'>".$r->getNombre()."</td>";
        echo "    <td><a href='paisEdit.php?id=".$r->getCodigoPais()."'>Editar</a> <a href='paisDML.php?id=".$r->getCodigoPais()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
