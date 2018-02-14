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
    include_once("CPersonaCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $numero_identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
                    
            $lobPersonaCollector = new CPersonaCollector();
            $lobPersonaCollector->insertREC($numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
         
            $numero_identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
            
            $lobPersonaCollector = new CPersonaCollector();
            $lobPersonaCollector->updateALL($numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobPersonaCollector = new CPersonaCollector();
                $lobPersonaCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="persona.php">Volver Administración de Personas</a></div>
</body>
</html>
