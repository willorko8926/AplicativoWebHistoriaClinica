<?php
    session_start();
    //if (isset($_SESSION['nombre']))
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header>
<?php

        
    include_once("CPersonaContactoCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $txtDireccion = $_POST["txtDireccion"];
            $txtCelular = $_POST["txtCelular"];
            $txtCorreo = $_POST["txtCorreo"];
            $txtCodigoPais = $_POST["txtCodigoPais"];
                    
            $lobPersonaContactoCollector = new CPersonaContactoCollector();
            $lobPersonaContactoCollector->insertREC($txtDireccion, $txtCelular, $txtCorreo, $txtCodigoPais);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
         
            $txtDireccion = $_POST["txtDireccion"];
            $txtCelular = $_POST["txtCelular"];
            $txtCorreo = $_POST["txtCorreo"];
            $txtCodigoPais = $_POST["txtCodigoPais"];
            
            $lobPersonaContactoCollector = new CPersonaContactoCollector();
            $lobPersonaContactoCollector->updateALL($txtDireccion, $txtCelular, $, $txtCorreo, $txtCodigoPais);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobPersonaContactoCollector = new CPersonaContactoCollector();
                $lobPersonaContactoCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="personaContacto.php">Volver Administración de Personas</a></div>
</body>
</html>
