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
    <h2>Administración de Contacto</h2>
    <table>
    <tr>
        <th>Num. Contacto</th>
        <th>Nombres</th>
        <th>Correo electrónico</th>
        <th>Asunto</th>
        <th>Mensaje</th>
        <th><a href="contactoCreate.php">Crear Contacto</a></th>
    </tr>
<?php
    include_once("CContactoCollector.php");
    $id = 1;
    $lobContactoCollector = new CContactoCollector();
    foreach ($lobContactoCollector->selectALL() as $r){
        echo "<tr>";  //preguntar si hay que poner el pk o id aquí
        echo "    <td class='col_left_10'>".$r->getNumeroContacto()."</td>";
        echo "    <td class='col_left_10'>".$r->getNombres()."</td>";
        echo "    <td class='col_left_20'>".$r->getCorreoElectronico()."</td>";
        echo "    <td class='col_left_40'>".$r->getAsunto()."</td>";
        echo "    <td class='col_left_10'>".$r->getMensaje()."</td>";
        echo "    <td><a href='contactoEdit.php?id=".$r->getNumeroContacto()."'>Editar</a> <a href='contactoDML.php?id=".$r->getNumeroContacto()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
