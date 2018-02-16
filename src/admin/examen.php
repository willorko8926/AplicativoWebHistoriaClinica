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
    <h2>Administración de EXAMEN LABORATORIO</h2>
    <table>
    <tr>
  
        <th>ID </th>
        <th>Codigo Pers.</th>
        <th>Codigo Inst.</th>
        <th>Codigo Med.</th>
        <th>Fecha Ex.</th>
        <th>Tipo Ex.</th>
        <th>Consideraciones Exa.</th>
        <th>Explicacion Resul.</th>


        <th><a href="examenCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CExamenCollector.php");
    $id = 1;
    $lobExamenCollector = new CExamenCollector();
    foreach ($lobExamenCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getNumero_examen()."</td>";
        echo "    <td class='col_left_20'>".$r->getCodigo_Persona()."</td>";
        echo "    <td class='col_left_40'>".$r->getCodigo_institucion()."</td>";
        echo "    <td class='col_left_10'>".$r->getCodigo_medico()."</td>";
        echo "    <td class='col_left_10'>".$r->getFecha_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getTipo_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getConsideraciones_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getExplicacion_resultado()."</td>";

echo "    <td><a href='examenEdit.php?id=".$r->getNumero_examen()."'>Editar</a> <a href='examenDML.php?id=".$r->getNumero_examen()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
