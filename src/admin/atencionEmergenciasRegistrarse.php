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
    <h2>Administración de Registros de Atencion de Emergencias</h2>
    <table>
    <tr>
        <th>Numero de Atencion</th>
        <th>Codigo Persona</th>
        <th>Codigo Institucion</th>
        <th>Codigo Medico</th>
        <th>Fecha de Atencion</th>
        <th>Tipo de Emergencia</th>
        <th>Diagnostico</th>

        <th><a href="atencionEmergenciasRegistrarseCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CRegAtencionEmergenciasCollector.php");
    $id = 1;
    $lobRegAtencionEmergenciasCollector = new CRegAtencionEmergenciasCollector();
    foreach ($lobRegAtencionEmergenciasCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getNumeroAtencion()."</td>";
        echo "    <td class='col_left_20'>".$r->getCodigoPersona()."</td>";
        echo "    <td class='col_left_40'>".$r->getCodigoInstitucion()."</td>";
        echo "    <td class='col_left_10'>".$r->getCodigoMedico()."</td>";
        echo "    <td class='col_left_10'>".$r->getFechaAtencion()."</td>";
        echo "    <td class='col_left_10'>".$r->getTipoEmergencia()."</td>";
        echo "    <td class='col_left_10'>".$r->getDiagnostico()."</td>";

        echo "    <td><a href='atencionEmergenciasRegistrarseEdit.php?id=".$r->getNumeroAtencion()."'>Editar</a> <a href='atencionEmergenciasRegistrarseDML.php?id=".$r->getNumeroAtencion()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
