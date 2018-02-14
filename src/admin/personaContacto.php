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
    <h2>Administración de PERSONAS CONTACTO</h2>
    <table>
    <tr>
        <th>ID </th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Correo Electronico</th>
         <th>Codigo de Pais</th>
        <th><a href="personaContactoCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CPersonaContactoCollector.php");
    $id = 1;
    $lobPersonaContactoCollector = new CPersonaContactoCollector();
    foreach ($lobPersonaContactoCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getCodigo_Persona()."</td>";
        echo "    <td class='col_left_20'>".$r->getDireccion()."</td>";
        echo "    <td class='col_left_40'>".$r->getCelular()."</td>";
        echo "    <td class='col_left_10'>".$r->getCorreo_electronico()."</td>";
         echo "    <td class='col_left_10'>".$r->getCodigo_pais_residencia()."</td>";
   


echo "    <td><a href='personaContactoEdit.php?id=".$r->getCodigo_Persona()."'>Editar</a> <a href='personaContactoDML.php?id=".$r->getCodigo_Persona()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
    }
?>
    </table>
    <br>
    <a href="../../login.php">Volver Login</a>    
</body>
</html>
