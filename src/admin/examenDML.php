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
  
  
        
    include_once("CExamenCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigo_persona = $_POST["codigo_persona"];
            $codigo_institucion = $_POST["codigo_institucion"];
            $codigo_medico = $_POST["codigo_medico"];
            $fecha_examen = $_POST["fecha_examen"];
            $tipo_examen = $_POST["tipo_examen"];
            $consideraciones_examen = $_POST["consideraciones_examen"];
            $explicacion_resultado = $_POST["explicacion_resultado"];

                    
            $lobExamenCollector = new CExamenCollector();
            $lobExamenCollector->insertREC($codigo_persona, $codigo_institucion, $codigo_medico, $fecha_examen, $tipo_examen, $consideraciones_examen, $explicacion_resultado);
            echo "Registro Creado Exitosamente...";
        }

        if ($tipoOperacion == 2){
         
            $codigo_persona = $_POST["codigo_persona"];
            $codigo_institucion = $_POST["codigo_institucion"];
            $codigo_medico = $_POST["codigo_medico"];
            $fecha_examen = $_POST["fecha_examen"];
            $tipo_examen = $_POST["tipo_examen"];
            $consideraciones_examen = $_POST["consideraciones_examen"];
            $explicacion_resultado = $_POST["explicacion_resultado"];
            
            $lobExamenCollector = new CExamenCollector();
            $lobExamenCollector->updateALL($codigo_persona, $codigo_institucion, $codigo_medico, $fecha_examen, $tipo_examen, $consideraciones_examen, $explicacion_resultado);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobExamenCollector = new CExamenCollector();
                $lobExamenCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="examen.php">Volver Administración de Personas</a></div>
</body>
</html>