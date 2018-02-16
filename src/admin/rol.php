<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:fault.php');
}
$pUserName = $_SESSION['SSUserName'];
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
    <h2>Administración de Roles</h2>
    <table>
    <tr>
        <th>Código Rol</th>
        <th>Descripción</th>
        <th><a href="rolCreate.php">Crear nuevo Rol</a></th>
    </tr>
<?php
    include_once("CRolCollector.php");
    $id = 1;
    $lobRolCollector = new CRolCollector();
    foreach ($lobRolCollector->selectALL() as $r){
        echo "<tr>";  //preguntar si hay que poner el pk o id aquí
        echo "    <td class='col_left_10'>".$r->getCodigoRol()."</td>";
        echo "    <td class='col_left_10'>".$r->getDescripcion()."</td>";
        echo "    <td><a href='rolEdit.php?id=".$r->getCodigoRol()."'>Editar</a> <a href='rolDML.php?id=".$r->getCodigoRol()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
