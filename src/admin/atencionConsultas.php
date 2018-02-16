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
    <h2>Administración de Registro de Consultas</h2>
    <table>
    <tr>
         <th>Código Usuario</th>
        <th>Código U. Médica</th>
        <th>Código Médico</th>
        <th>Fecha Atención</th>
        <th>Especialidad</th>
        <th>Diagnóstico</th>
                <th><a href="atencionConsultasCreate.php">Crear</a></th>

    </tr>
<?php
    include_once("CAtencionConsultasCollector.php");
    $id = 1;
    $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
    foreach ($lobAtencionConsultasCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_20'>".$r->getCodigoPersona()."</td>";
        echo "    <td class='col_left_40'>".$r->getCodigoInstitucion()."</td>";
        echo "    <td class='col_left_10'>".$r->getCodigoMedico()."</td>"; 
        echo "    <td class='col_left_10'>".$r->getFechaAtencion()."</td>";
        echo "    <td class='col_left_10'>".$r->getEspecialidad()."</td>";
        echo "    <td class='col_left_10'>".$r->getDiagnostico()."</td>";
        echo "    <td><a href='atencionConsultasEdit.php?id=".$r->getNumeroAtencion()."'>Editar</a> <a href='atencionConsultasDML.php?id=".$r->getNumeroAtencion()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
