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
    <h2>Administración de Registros de Usuarios</h2>
    <table>
    <tr>
        <th>Cod.Persona</th>
        <th>Especialidad</th>
        <th>Estado</th>
        <th><a href="medicosRegistrarseCreate.php">Crear</a></th>
    </tr>
        
<?php
    include_once("CRegMedicosCollector.php");
    $id = 1;
    $lobRegMedicosCollector = new CRegMedicosCollector();
    foreach ($lobRegMedicosCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getCodigoPersona()."</td>";
        echo "    <td class='col_left_20'>".$r->getEspecialidad()."</td>";
        echo "    <td class='col_left_40'>".$r->getEstado()."</td>";
        echo "    <td><a href='medicosRegistrarseEdit.php?id=".$r->getCodigoPersona()."'>Editar</a> <a href='medicosRegistrarseDML.php?id=".$r->getCodigoPersona()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
