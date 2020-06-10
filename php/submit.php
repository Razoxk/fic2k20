<?php 

include 'db.php';

$nombreProyecto = $_POST['nombreProyecto'];
$nombreEntidad = $_POST['nombreEntidad'];


// SQL proyecto

$sqlProyecto = "INSERT INTO proyecto (id, nombre, nombre_entidad, estado) 
VALUES ('', '$nombreProyecto','$nombreEntidad','Pendiente')";
$conn->query($sqlProyecto);


//Consulta por id generado del proyecto

$stmt = "SELECT * FROM proyecto ORDER BY ID DESC LIMIT 1";   
        foreach ($conn->query($stmt) as $row){
            $id_proyecto = $row['id'];
        }

//1.3 Datos Coordinador 

$rutCoordinador = $_POST['rutCoordinador'];
$nombreCoordinador = $_POST['nombreCoordinador'];
$cargoCoordinador = $_POST['cargoCoordinador'];
$telefonoCoordinador = $_POST['telefonoCoordinador'];
$celularCoordinador = $_POST['celularCoordinador'];
$emailCoordinador = $_POST['emailCoordinador'];
$direccionCoordinador = $_POST['direccionCoordinador'];

$sqlCoordinador = "INSERT INTO coordinador (id, rut, nombre, cargo, telefono, celular, email, direccion, id_proyecto) 
    VALUES ('', '$rutCoordinador','$nombreCoordinador','$cargoCoordinador','$telefonoCoordinador','$celularCoordinador','$emailCoordinador','$direccionCoordinador','$id_proyecto')";
$conn->query($sqlCoordinador);

// 1.4 Datos representante

$rutRepresentante = $_POST['rutRepresentante'];
$nombreRepresentante = $_POST['nombreRepresentante'];
$cargoRepresentante = $_POST['cargoRepresentante'];
$numeroRepresentante = $_POST['numeroRepresentante'];
$celularRepresentante = $_POST['celularRepresentante'];
$emailRepresentante = $_POST['emailRepresentante'];
$direccionRepresentante = $_POST['direccionRepresentante'];


$sqlRepresentante = "INSERT INTO representante_legal (id, id_proyecto, rut, nombre, cargo, telefono, celular, email, direccion) 
    VALUES ('', '$id_proyecto','$rutRepresentante','$nombreRepresentante','$cargoRepresentante','$numeroRepresentante', '$celularRepresentante', '$emailRepresentante','$direccionRepresentante' )";
$conn->query($sqlRepresentante);

// 2 - Antecedentes de la Iniciativa

$prioridadRegional = $_POST['options1'];
$destinoProyecto = $_POST['destino'];
$duracionSede = $_POST['duracionSede'];
$totalPresupuesto = $_POST['proy_total3'];
$lugarEjecucion = $_POST['lugar_ejecucion'];

$sqlAntecedentes = "INSERT INTO antecedentes_iniciativa(id, id_proyecto, prioridad_regional, destino_proyecto, duracion_sede_iniciativa, lugar_ejecucion, presupuesto_total) 
    VALUES ('', '$id_proyecto','$prioridadRegional','$destinoProyecto','$duracionSede', '$lugarEjecucion','$totalPresupuesto')";
$conn->query($sqlAntecedentes);


//3. Estado del Arte

$estadoArte = $_POST['estado'];


$sqlEstadoarte = "INSERT INTO estado_arte(id, id_proyecto, estado_arte) 
VALUES ('', '$id_proyecto','$estadoArte')";
$conn->query($sqlEstadoarte);


echo "Id creado para el proyecto: ".$id_proyecto;


//4 - Descripción de la Propuesta Técnica y Metodológica

$problema_oportunidad = $_POST['problema_oportunidad'];
$merito_innovador = $_POST['merito_innovador'];
$descripcion_resultados = $_POST['descripcion_resultados'];
$objetivo_general = $_POST['objetivo_general'];
$indicador_resultado = $_POST['indicador_resultado'];
$meta_indicador = $_POST['meta_indicador'];
$medios_verificacion = $_POST['medios_verificacion'];

$beneficiarios_num_hombres = $_POST['beneficiarios_num_hombres'];
$beneficiarios_text_hombres = $_POST['beneficiarios_text_hombres'];
$beneficiarios_num_mujeres = $_POST['beneficiarios_num_mujeres'];
$beneficiarios_text_mujeres = $_POST['beneficiarios_text_mujeres'];
$beneficiarios_num_empresas = $_POST['beneficiarios_num_empresas'];
$beneficiarios_text_empresas= $_POST['beneficiarios_text_empresas'];

$metodologia_proyecto = $_POST['metodologia_proyecto'];
$actividades_difusion = $_POST['actividades_difusion'];
$mecanismos_transferencias = $_POST['mecanismos_transferencias'];
$modelo_sustentabilidad = $_POST['modelo_sustentabilidad'];
$plan_contingencia = $_POST['plan_contingencia'];
$bibliografia_referencial = $_POST['bibliografia_referencial'];


$sqlDescripcion = "INSERT INTO descripcion_propuesta(id, id_proyecto, problema_oportunidad, merito_innovador, descripcion_resultados, objetivo_general, indicador_resultado, meta_indicador, medios_verificacion, beneficiarios_num_hombres, beneficiarios_text_hombres, beneficiarios_num_mujeres, beneficiarios_text_mujeres, metodologia_proyecto, actividades_difusion, mecanismos_transferencias, modelo_sustentabilidad, plan_contingencia, bibliografia_referencial)
    VALUES ('', '$id_proyecto','$problema_oportunidad','$merito_innovador','$descripcion_resultados','$objetivo_general', '$indicador_resultado', '$meta_indicador','$medios_verificacion', '$beneficiarios_num_hombres', '$beneficiarios_text_hombres', '$beneficiarios_num_mujeres', '$beneficiarios_text_mujeres', '$metodologia_proyecto','$actividades_difusion', '$mecanismos_transferencias', '$modelo_sustentabilidad', '$plan_contingencia', '$bibliografia_referencial')";
$conn->query($sqlDescripcion);



echo "Datos almacenados punto 1-2 y 4";

// 5. Anexos y archivos adjuntos

$nombre=$_FILES['archivo1']['name'];
$guardado=$_FILES['archivo1']['tmp_name'];

$nombre2=$_FILES['archivo2']['name'];
$guardado2=$_FILES['archivo2']['tmp_name'];

$nombre3=$_FILES['archivo3']['name'];
$guardado3=$_FILES['archivo3']['tmp_name'];

$nombre4=$_FILES['archivo4']['name'];
$guardado4=$_FILES['archivo4']['tmp_name'];

$nombre5=$_FILES['archivo5']['name'];
$guardado5=$_FILES['archivo5']['tmp_name'];

$nombre6=$_FILES['archivo6']['name'];
$guardado6=$_FILES['archivo6']['tmp_name'];

$nombre7=$_FILES['archivo7']['name'];
$guardado7=$_FILES['archivo7']['tmp_name'];

$nombre8=$_FILES['archivo8']['name'];
$guardado8=$_FILES['archivo8']['tmp_name'];

$nombre9=$_FILES['archivo9']['name'];
$guardado9=$_FILES['archivo9']['tmp_name'];

$nombre10=$_FILES['archivo10']['name'];
$guardado10=$_FILES['archivo10']['tmp_name'];

$nombre11=$_FILES['archivo11']['name'];
$guardado11=$_FILES['archivo11']['tmp_name'];

$nombre12=$_FILES['archivo12']['name'];
$guardado12=$_FILES['archivo12']['tmp_name'];

$nombre13=$_FILES['archivo13']['name'];
$guardado13=$_FILES['archivo13']['tmp_name'];

$nombre14=$_FILES['archivo14']['name'];
$guardado14=$_FILES['archivo14']['tmp_name'];

$nombre15=$_FILES['archivo15']['name'];
$guardado15=$_FILES['archivo15']['tmp_name'];



//comprueba la ruta si existe
if(!file_exists('./proyectos/publicos/'.$id_proyecto)){
    //crea carpeta para proyecto
    mkdir('./proyectos/publicos/'.$id_proyecto,0777,true);
    //Consulta si se creo correctamente
	if(file_exists('./proyectos/publicos/'.$id_proyecto)){
        //Mueve archivos a la ruta proyectos/publicos/id_proyecto.
		if(move_uploaded_file($guardado, './proyectos/publicos/'.$id_proyecto.'/'.$nombre)){
            
            move_uploaded_file($guardado2, './proyectos/publicos/'.$id_proyecto.'/'.$nombre2);
            move_uploaded_file($guardado3, './proyectos/publicos/'.$id_proyecto.'/'.$nombre3);
            move_uploaded_file($guardado4, './proyectos/publicos/'.$id_proyecto.'/'.$nombre4);
            move_uploaded_file($guardado5, './proyectos/publicos/'.$id_proyecto.'/'.$nombre5);
            move_uploaded_file($guardado6, './proyectos/publicos/'.$id_proyecto.'/'.$nombre6);
            move_uploaded_file($guardado7, './proyectos/publicos/'.$id_proyecto.'/'.$nombre7);
            move_uploaded_file($guardado8, './proyectos/publicos/'.$id_proyecto.'/'.$nombre8);
            move_uploaded_file($guardado9, './proyectos/publicos/'.$id_proyecto.'/'.$nombre9);
            move_uploaded_file($guardado10, './proyectos/publicos/'.$id_proyecto.'/'.$nombre10);
            move_uploaded_file($guardado11, './proyectos/publicos/'.$id_proyecto.'/'.$nombre11);
            move_uploaded_file($guardado12, './proyectos/publicos/'.$id_proyecto.'/'.$nombre12);
            move_uploaded_file($guardado13, './proyectos/publicos/'.$id_proyecto.'/'.$nombre13);
            move_uploaded_file($guardado14, './proyectos/publicos/'.$id_proyecto.'/'.$nombre14);
            move_uploaded_file($guardado15, './proyectos/publicos/'.$id_proyecto.'/'.$nombre15);
            
            
            //Aqui debe subir ruta archivo
            
            $ruta1 =     "./proyectos/publicos/$id_proyecto/$nombre";
            $ruta2 =     "./proyectos/publicos/$id_proyecto/$nombre2";
            $ruta3 =     "./proyectos/publicos/$id_proyecto/$nombre3";
            $ruta4 =     "./proyectos/publicos/$id_proyecto/$nombre4";
            $ruta5 =     "./proyectos/publicos/$id_proyecto/$nombre5";
            $ruta6 =     "./proyectos/publicos/$id_proyecto/$nombre6";
            $ruta7 =     "./proyectos/publicos/$id_proyecto/$nombre7";
            $ruta8 =     "./proyectos/publicos/$id_proyecto/$nombre8";
            $ruta9 =     "./proyectos/publicos/$id_proyecto/$nombre9";
            $ruta10 =    "./proyectos/publicos/$id_proyecto/$nombre10";
            $ruta11 =    "./proyectos/publicos/$id_proyecto/$nombre11";
            $ruta12 =    "./proyectos/publicos/$id_proyecto/$nombre12";
            $ruta13 =    "./proyectos/publicos/$id_proyecto/$nombre13";
            $ruta14 =    "./proyectos/publicos/$id_proyecto/$nombre14";
            $ruta15 =    "./proyectos/publicos/$id_proyecto/$nombre15";

            

            $sqlAnexos = "INSERT INTO anexos(id, id_proyecto, anexo_2, anexo_3, grafico_imagen, objetivos_especificos, anexo_6, presupuesto_detallado, resultados_esperados, indicador_evaluacion, carta_gantt, funcion_integrantes, copia_rol_tributario, copia_cedula_identidad, copia_instrumento, carta_autoridad, antecedentes_relevantes, copia_certificado_vigencia) 
                VALUES('', '$id_proyecto', '$ruta1', '$ruta2', '$ruta3', '$ruta4', '$ruta5', '$ruta6', '$ruta7', '$ruta8', '$ruta9', '$ruta10', '$ruta11', '$ruta12', '$ruta13', '$ruta14', '$ruta15', '')";
            $conn->query($sqlAnexos);

            echo "Archivos y rutas subidas con exito";

            print_r($sqlAnexos);

		}else{
			echo "Archivo no se pudo guardar";
		}
    }
}
//Si existe la ruta, mueve directamente los archivos
else{
	if(move_uploaded_file($guardado, './proyectos/publicos/'.$id_proyecto.'/'.$nombre)){
        
        move_uploaded_file($guardado2, './proyectos/publicos/'.$id_proyecto.'/'.$nombre2);
        move_uploaded_file($guardado3, './proyectos/publicos/'.$id_proyecto.'/'.$nombre3);
        move_uploaded_file($guardado4, './proyectos/publicos/'.$id_proyecto.'/'.$nombre4);
        move_uploaded_file($guardado5, './proyectos/publicos/'.$id_proyecto.'/'.$nombre5);
        move_uploaded_file($guardado6, './proyectos/publicos/'.$id_proyecto.'/'.$nombre6);
        move_uploaded_file($guardado7, './proyectos/publicos/'.$id_proyecto.'/'.$nombre7);
        move_uploaded_file($guardado8, './proyectos/publicos/'.$id_proyecto.'/'.$nombre8);
        move_uploaded_file($guardado9, './proyectos/publicos/'.$id_proyecto.'/'.$nombre9);
        move_uploaded_file($guardado10, './proyectos/publicos/'.$id_proyecto.'/'.$nombre10);
        move_uploaded_file($guardado11, './proyectos/publicos/'.$id_proyecto.'/'.$nombre11);
        move_uploaded_file($guardado12, './proyectos/publicos/'.$id_proyecto.'/'.$nombre12);
        move_uploaded_file($guardado13, './proyectos/publicos/'.$id_proyecto.'/'.$nombre13);
        move_uploaded_file($guardado14, './proyectos/publicos/'.$id_proyecto.'/'.$nombre14);
        move_uploaded_file($guardado15, './proyectos/publicos/'.$id_proyecto.'/'.$nombre15);
        

        $ruta1 = "./proyectos/publicos/$id_proyecto/$nombre";
        $ruta2 = "./proyectos/publicos/$id_proyecto/$nombre2";
        $ruta3 = "./proyectos/publicos/$id_proyecto/$nombre3";
        $ruta4 = "./proyectos/publicos/$id_proyecto/$nombre4";
        $ruta5 = "./proyectos/publicos/$id_proyecto/$nombre5";
        $ruta6 = "./proyectos/publicos/$id_proyecto/$nombre6";
        $ruta7 = "./proyectos/publicos/$id_proyecto/$nombre7";
        $ruta8 = "./proyectos/publicos/$id_proyecto/$nombre8";
        $ruta9 = "./proyectos/publicos/$id_proyecto/$nombre9";
        $ruta10 = "./proyectos/publicos/$id_proyecto/$nombre10";
        $ruta11 = "./proyectos/publicos/$id_proyecto/$nombre11";
        $ruta12 = "./proyectos/publicos/$id_proyecto/$nombre12";
        $ruta13 = "./proyectos/publicos/$id_proyecto/$nombre13";
        $ruta14 = "./proyectos/publicos/$id_proyecto/$nombre14";
        $ruta15 = "./proyectos/publicos/$id_proyecto/$nombre15";

        $sqlAnexos = "INSERT INTO anexos(id, id_proyecto, anexo_2, anexo_3, grafico_imagen, objetivos_especificos, anexo_6, presupuesto_detallado, resultados_esperados, indicador_evaluacion, carta_gantt, funcion_integrantes, copia_rol_tributario, copia_cedula_identidad, copia_instrumento, carta_autoridad, antecedentes_relevantes, copia_certificado_vigencia) 
        VALUES('', '$id_proyecto', '$ruta1', '$ruta2', '$ruta3', '$ruta4', '$ruta5', '$ruta6', '$ruta7', '$ruta8', '$ruta9', '$ruta10', '$ruta11', '$ruta12', '$ruta13', '$ruta14', '$ruta15', '')";
        $conn->query($sqlAnexos);

        echo "Archivo guardado con exito";


	}else{
		echo "Archivo no se pudo guardar";
	}
}


?>