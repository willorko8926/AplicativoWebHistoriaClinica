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
    <h2>Administración de PERSONAS</h2>
    <table>
    <tr>
        <th>Codigo</th>
        <th>Identificación</th>
        <th>Nombres</th>
        <th>Apellidos</th>
         <th>Sexo</th>
        <th>Nacionalidad</th>
        <th><a href="personaCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CPersonaCollector.php");
    $id = 1;
    $lobPersonaCollector = new CPersonaCollector();
    foreach ($lobPersonaCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getCodigo_Persona()."</td>";
        echo "    <td class='col_left_20'>".$r->getNumero_Identificacion()."</td>";
        echo "    <td class='col_left_40'>".$r->getNombres()."</td>";
        echo "    <td class='col_left_10'>".$r->getApellidos()."</td>";
         echo "    <td class='col_left_10'>".$r->getApellidos()."</td>";
         echo "    <td class='col_left_10'>".$r->getSexo()."</td>";
         echo "    <td class='col_left_10'>".$r->getNacionalidad()."</td>";


echo "    <td><a href='personaEdit.php?id=".$r->getCodigo_Persona()."'>Editar</a> <a href='personaDML.php?id=".$r->getCodigo_Persona()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
