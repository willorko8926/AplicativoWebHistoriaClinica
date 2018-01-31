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
    <h2>Administración de Registros de Usuarios</h2>
    <table>
    <tr>
        <th>Num.Reg.</th>
        <th>Identificación</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th><a href="registrarseCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CRegUsuarioCollector.php");
    $id = 1;
    $lobRegUsuarioCollector = new CRegUsuarioCollector();
    foreach ($lobRegUsuarioCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getNumeroRegistro()."</td>";
        echo "    <td class='col_left_20'>".$r->getNumeroIdentificacion()."</td>";
        echo "    <td class='col_left_40'>".$r->getNombres()."</td>";
        echo "    <td class='col_left_10'>".$r->getApellidos()."</td>";
        echo "    <td><a href='registrarseEdit.php?id=".$r->getNumeroRegistro()."'>Editar</a> <a href='registrarseDML.php?id=".$r->getNumeroRegistro()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
