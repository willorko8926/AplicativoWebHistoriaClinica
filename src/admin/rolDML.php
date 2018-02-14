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
    include_once("CRolCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoRol = $_POST["txtCodRol"];
            $descripcion = $_POST["txtDescripcion"];
            
            $lobRolCollector = new CRolCollector();
            $lobRolCollector->insertREC($codigoRol, $descripcion);
            echo "Rol Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $codigoRol = $_POST["txtCodRol"];
            $descripcion = $_POST["txtDescripcion"];
            
            $lobRolCollector = new CRolCollector();
            $lobRolCollector->updateALL($codigoRol, $descripcion);
            echo "Rol Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobRolCollector = new CRolCollector();
                $lobRolCollector->deleteREC($id);
                echo "Rol Eliminado Exitosamente...";
            }
            else
                echo "Rol a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="rol.php">Volver Administración de Roles</a></div>
</body>
</html>
