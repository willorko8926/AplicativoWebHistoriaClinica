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
    <h2>Administración de Instituciones de salud</h2>
    <table>
    <tr>
        <th>Cod.Isnti.</th>
        <th>Nombres</th>
        <th>Razon</th>
        <th><a href="institucionRegistrarseCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CRegIstitucionCollector.php");
    $id = 1;
    $lobRegInstitucionCollector = new CRegIstitucionCollector();
    foreach ($lobRegInstitucionCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getCodigoInstitucion()."</td>";
        echo "    <td class='col_left_20'>".$r->getNombre()."</td>";
        echo "    <td class='col_left_40'>".$r->getRazonSocial()."</td>";
        echo "    <td><a href='institucionRegistrarseEdit.php?id=".$r->getCodigoInstitucion()."'>Editar</a> <a href='institucionRegistrarseDML.php?id=".$r->getCodigoInstitucion()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
