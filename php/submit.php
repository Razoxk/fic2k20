<?php 
error_reporting(0);
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


//echo "Id creado para el proyecto: ".$id_proyecto;


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



//echo "Datos almacenados punto 1-2 y 4";

// 5. Anexos y archivos adjuntos

$anexo_2=$_FILES['archivo1']['name'];
$guardado=$_FILES['archivo1']['tmp_name'];

$anexo_3=$_FILES['archivo2']['name'];
$guardado2=$_FILES['archivo2']['tmp_name'];

$grafico=$_FILES['archivo3']['name'];
$guardado3=$_FILES['archivo3']['tmp_name'];

$objetivosEspecificos=$_FILES['archivo4']['name'];
$guardado4=$_FILES['archivo4']['tmp_name'];

$anexo_6=$_FILES['archivo5']['name'];
$guardado5=$_FILES['archivo5']['tmp_name'];

$presupuestoDetallado=$_FILES['archivo6']['name'];
$guardado6=$_FILES['archivo6']['tmp_name'];

$resultadosEsperados=$_FILES['archivo7']['name'];
$guardado7=$_FILES['archivo7']['tmp_name'];

$indicadoresEvaluación=$_FILES['archivo8']['name'];
$guardado8=$_FILES['archivo8']['tmp_name'];

$cartaGantt=$_FILES['archivo9']['name'];
$guardado9=$_FILES['archivo9']['tmp_name'];

$funcion_integrante=$_FILES['archivo10']['name'];
$guardado10=$_FILES['archivo10']['tmp_name'];

$rolUnicoTributario=$_FILES['archivo11']['name'];
$guardado11=$_FILES['archivo11']['tmp_name'];

$cedulaIdentidad=$_FILES['archivo12']['name'];
$guardado12=$_FILES['archivo12']['tmp_name'];

$copiaSimpleInstrumento=$_FILES['archivo13']['name'];
$guardado13=$_FILES['archivo13']['tmp_name'];

$cartaAutoridad=$_FILES['archivo14']['name'];
$guardado14=$_FILES['archivo14']['tmp_name'];

$antecedentesRelevantes=$_FILES['archivo15']['name'];
$guardado15=$_FILES['archivo15']['tmp_name'];



//comprueba la ruta si existe
if(!file_exists('./proyectos/publicos/'.$id_proyecto)){
    //crea carpeta para proyecto
    mkdir('./proyectos/publicos/'.$id_proyecto,0777,true);
    //Consulta si se creo correctamente
	if(file_exists('./proyectos/publicos/'.$id_proyecto)){
        //Mueve archivos a la ruta proyectos/publicos/id_proyecto.
		if(move_uploaded_file($guardado, './proyectos/publicos/'.$id_proyecto.'/'.$anexo_2)){
            
            move_uploaded_file($guardado2,  './proyectos/publicos/'.$id_proyecto.'/'.$anexo_3);
            move_uploaded_file($guardado3,  './proyectos/publicos/'.$id_proyecto.'/'.$grafico);
            move_uploaded_file($guardado4,  './proyectos/publicos/'.$id_proyecto.'/'.$objetivosEspecificos);
            move_uploaded_file($guardado5,  './proyectos/publicos/'.$id_proyecto.'/'.$anexo_6);
            move_uploaded_file($guardado6,  './proyectos/publicos/'.$id_proyecto.'/'.$presupuestoDetallado);
            move_uploaded_file($guardado7,  './proyectos/publicos/'.$id_proyecto.'/'.$resultadosEsperados);
            move_uploaded_file($guardado8,  './proyectos/publicos/'.$id_proyecto.'/'.$indicadoresEvaluación);
            move_uploaded_file($guardado9,  './proyectos/publicos/'.$id_proyecto.'/'.$cartaGantt);
            move_uploaded_file($guardado10, './proyectos/publicos/'.$id_proyecto.'/'.$funcion_integrante);
            move_uploaded_file($guardado11, './proyectos/publicos/'.$id_proyecto.'/'.$rolUnicoTributario);
            move_uploaded_file($guardado12, './proyectos/publicos/'.$id_proyecto.'/'.$cedulaIdentidad);
            move_uploaded_file($guardado13, './proyectos/publicos/'.$id_proyecto.'/'.$copiaSimpleInstrumento);
            move_uploaded_file($guardado14, './proyectos/publicos/'.$id_proyecto.'/'.$cartaAutoridad);
            move_uploaded_file($guardado15, './proyectos/publicos/'.$id_proyecto.'/'.$antecedentesRelevantes);
            
            
            //Aqui debe subir ruta archivo
            
            $ruta1 =     "./proyectos/publicos/$id_proyecto/$anexo_2";
            $ruta2 =     "./proyectos/publicos/$id_proyecto/$anexo_3";
            $ruta3 =     "./proyectos/publicos/$id_proyecto/$grafico";
            $ruta4 =     "./proyectos/publicos/$id_proyecto/$objetivosEspecificos";
            $ruta5 =     "./proyectos/publicos/$id_proyecto/$anexo_6";
            $ruta6 =     "./proyectos/publicos/$id_proyecto/$presupuestoDetallado";
            $ruta7 =     "./proyectos/publicos/$id_proyecto/$resultadosEsperados";
            $ruta8 =     "./proyectos/publicos/$id_proyecto/$indicadoresEvaluación";
            $ruta9 =     "./proyectos/publicos/$id_proyecto/$cartaGantt";
            $ruta10 =    "./proyectos/publicos/$id_proyecto/$funcion_integrante";
            $ruta11 =    "./proyectos/publicos/$id_proyecto/$rolUnicoTributario";
            $ruta12 =    "./proyectos/publicos/$id_proyecto/$cedulaIdentidad";
            $ruta13 =    "./proyectos/publicos/$id_proyecto/$copiaSimpleInstrumento";
            $ruta14 =    "./proyectos/publicos/$id_proyecto/$cartaAutoridad";
            $ruta15 =    "./proyectos/publicos/$id_proyecto/$antecedentesRelevantes";

            

            $sqlAnexos = "INSERT INTO anexos(id, id_proyecto, anexo_2, anexo_3, grafico_imagen, objetivos_especificos, anexo_6, presupuesto_detallado, resultados_esperados, indicador_evaluacion, carta_gantt, funcion_integrantes, copia_rol_tributario, copia_cedula_identidad, copia_instrumento, carta_autoridad, antecedentes_relevantes, copia_certificado_vigencia) 
                VALUES('', '$id_proyecto', '$ruta1', '$ruta2', '$ruta3', '$ruta4', '$ruta5', '$ruta6', '$ruta7', '$ruta8', '$ruta9', '$ruta10', '$ruta11', '$ruta12', '$ruta13', '$ruta14', '$ruta15', '')";
            $conn->query($sqlAnexos);

            //echo "Archivos y rutas subidas con exito";

            //print_r($sqlAnexos);

		}else{
			//echo "Archivo no se pudo guardar";
		}
    }
}
//Si existe la ruta, mueve directamente los archivos
else{
	if(move_uploaded_file($guardado, './proyectos/publicos/'.$id_proyecto.'/'.$anexo_2)){
        
        
        move_uploaded_file($guardado2,  './proyectos/publicos/'.$id_proyecto.'/'.$anexo_3);
        move_uploaded_file($guardado3,  './proyectos/publicos/'.$id_proyecto.'/'.$grafico);
        move_uploaded_file($guardado4,  './proyectos/publicos/'.$id_proyecto.'/'.$objetivosEspecificos);
        move_uploaded_file($guardado5,  './proyectos/publicos/'.$id_proyecto.'/'.$anexo_6);
        move_uploaded_file($guardado6,  './proyectos/publicos/'.$id_proyecto.'/'.$presupuestoDetallado);
        move_uploaded_file($guardado7,  './proyectos/publicos/'.$id_proyecto.'/'.$resultadosEsperados);
        move_uploaded_file($guardado8,  './proyectos/publicos/'.$id_proyecto.'/'.$indicadoresEvaluación);
        move_uploaded_file($guardado9,  './proyectos/publicos/'.$id_proyecto.'/'.$cartaGantt);
        move_uploaded_file($guardado10, './proyectos/publicos/'.$id_proyecto.'/'.$funcion_integrante);
        move_uploaded_file($guardado11, './proyectos/publicos/'.$id_proyecto.'/'.$rolUnicoTributario);
        move_uploaded_file($guardado12, './proyectos/publicos/'.$id_proyecto.'/'.$cedulaIdentidad);
        move_uploaded_file($guardado13, './proyectos/publicos/'.$id_proyecto.'/'.$copiaSimpleInstrumento);
        move_uploaded_file($guardado14, './proyectos/publicos/'.$id_proyecto.'/'.$cartaAutoridad);
        move_uploaded_file($guardado15, './proyectos/publicos/'.$id_proyecto.'/'.$antecedentesRelevantes);
        

            
        $ruta1 =     "./proyectos/publicos/$id_proyecto/$anexo_2";
        $ruta2 =     "./proyectos/publicos/$id_proyecto/$anexo_3";
        $ruta3 =     "./proyectos/publicos/$id_proyecto/$grafico";
        $ruta4 =     "./proyectos/publicos/$id_proyecto/$objetivosEspecificos";
        $ruta5 =     "./proyectos/publicos/$id_proyecto/$anexo_6";
        $ruta6 =     "./proyectos/publicos/$id_proyecto/$presupuestoDetallado";
        $ruta7 =     "./proyectos/publicos/$id_proyecto/$resultadosEsperados";
        $ruta8 =     "./proyectos/publicos/$id_proyecto/$indicadoresEvaluación";
        $ruta9 =     "./proyectos/publicos/$id_proyecto/$cartaGantt";
        $ruta10 =    "./proyectos/publicos/$id_proyecto/$funcion_integrante";
        $ruta11 =    "./proyectos/publicos/$id_proyecto/$rolUnicoTributario";
        $ruta12 =    "./proyectos/publicos/$id_proyecto/$cedulaIdentidad";
        $ruta13 =    "./proyectos/publicos/$id_proyecto/$copiaSimpleInstrumento";
        $ruta14 =    "./proyectos/publicos/$id_proyecto/$cartaAutoridad";
        $ruta15 =    "./proyectos/publicos/$id_proyecto/$antecedentesRelevantes";

        $sqlAnexos = "INSERT INTO anexos(id, id_proyecto, anexo_2, anexo_3, grafico_imagen, objetivos_especificos, anexo_6, presupuesto_detallado, resultados_esperados, indicador_evaluacion, carta_gantt, funcion_integrantes, copia_rol_tributario, copia_cedula_identidad, copia_instrumento, carta_autoridad, antecedentes_relevantes, copia_certificado_vigencia) 
        VALUES('', '$id_proyecto', '$ruta1', '$ruta2', '$ruta3', '$ruta4', '$ruta5', '$ruta6', '$ruta7', '$ruta8', '$ruta9', '$ruta10', '$ruta11', '$ruta12', '$ruta13', '$ruta14', '$ruta15', '')";
        $conn->query($sqlAnexos);

        //echo "Archivo guardado con exito";


	}else{
		//echo "Archivo no se pudo guardar";
	}
}

// PDF

$tipo_institucion = "Publico";

$nuevo_path="../php/proyectos/publicos/".$id_proyecto;
				
        require('../fpdf/fpdf.php');
        class PDF extends FPDF
        {
        // Cabecera de página
        function Header()
        {   
            $this->Ln(10);
             
        }
        
        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
        }
        }
        // Creación del objeto de la clase heredada
        //$nombre_proy="hola"; 
        $hoy = date("j/n/Y");
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->Image('../img/logo.jpg',10,8,33);//
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(0,5,utf8_decode('ACUSE DE RECIBO DE POSTULACIÓN'),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('FONDO DE INNOVACION PARA LA COMPETITIVIDAD (FIC) 2020'),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('N°'.$id_proyecto),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('Fecha: '.$hoy),0,1,'C');
        $pdf->SetTextColor(1,108,190);
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(0,20,utf8_decode('CONTENIDO DE POSTULACIÓN'),0,1);
        $pdf->SetFont('Arial','',11);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,5,utf8_decode('Nombre de proyecto: '.$nombreProyecto),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Nombre de la entidad postulante: '.$nombreEntidad),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Coordinador responsable del proyecto: '.$nombreCoordinador),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Representante legal de la institución: '.$nombreRepresentante),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->Cell(0,10,utf8_decode('Tipo de proyecto: '.$tipo_institucion),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->Cell(0,10,utf8_decode('ARCHIVOS ADJUNTOS'),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->MultiCell(0,5,utf8_decode(' - Presupuesto: '.$presupuestoDetallado),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Resultados Esperados: '.$resultadosEsperados),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Eval. Ex-Ante: '.$indicadoresEvaluación),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Carta Gantt: '.$cartaGantt),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Función Integrantes: '.$funcion_integrante),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 2: '.$anexo_2),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 3: '.$anexo_3),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 4.2: '.$grafico),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 4.4: '.$objetivosEspecificos),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Rol Único Tributario de la Entidad Postulante: '.$rolUnicoTributario),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Cédula de Identidad del Representante Legal o Mandatario: '.$cedulaIdentidad),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Instrumento que Nombra al Representante Legal o Mandatario: '.$copiaSimpleInstrumento),0,1);
        $pdf->Cell(0,10,utf8_decode('Este comprobante certifica su postulación online.'),0,1);
        $pdf->Cell(0,0,utf8_decode(''),0,1);
        $pdf->MultiCell(0,5,utf8_decode('Es importante considerar que la documentación adjunta en la postulación, su información y contenido, es de exclusiva responsabilidad de la entidad postulante del proyecto y debe cumplir con lo exigido en las presentes bases. '),0,1);
        $pdf->Cell(0,5,utf8_decode('No obstante, esta será sometida al proceso de admisibilidad, donde se verificará que el contenido'),0,1);
        $pdf->Cell(0,5,utf8_decode('corresponda a lo solicitado. De no cumplirse esta condición la iniciativa se considerará inadmisible.'),0,1);
        $pdf->Image('../img/ie.jpeg',165,250,38,38,'JPEG', ''); //
        $pdf->Image('../img/f.jpeg',10,289,38,33,'JPEG', ''); //
        $pdf->Output($nuevo_path.'/ComprobanteFIC.pdf', 'F');       

  
        session_start();


        $_SESSION["comprobante"] = $nuevo_path.'/ComprobanteFIC.pdf';
        


        
        // Llamando a los campos
        
        // $correo = $_POST['correo'];
        // $telefono = $_POST['telefono'];
        
       

        // Llamando a los campos
        $nombreCoordinador = $_POST['nombreCoordinador'];
        $emailCoordinador = $_POST['emailCoordinador'];
        $emailRepresentante = $_POST['emailRepresentante'];
        $id_proyecto;
        
        
         //ENVIO DE CORREO A INSITUCION POSTULANTE
        $destinatario = "pablo.orellanaub@gmail.com";
        $asunto = "POSTULACION FIC 2020";
        $carta = "Sr(a): $nombreCoordinador con RUT $rutCoordinador y correo $emailCoordinador \n";
        $carta .= "Le informamos que su postulacion con nombre $nombreProyecto, ha sido ingresado exitosamente al sistema, en el transcurso de los días se le informará por este medio el resultado de su postulación \n";
        $carta .= "El número identificador de su postulación es : $id_proyecto \n";
        $carta .= "Nombre de proyecto: $nombreProyecto \n";
        $carta .= "Nombre de la entidad postulante: $nombreEntidad \n";
        $carta .= "Coordinador responsable del proyecto: $nombreCoordinador \n";
        $carta .= "Representante legal de la institución: $nombreRepresentante \n";
        $carta .= "Tipo de proyecto: $tipo_institucion \n\n";
        $carta .= " - Archivos adjuntos: \n";
        $carta .= " - Presupuesto: $presupuestoDetallado \n";
        $carta .= " - Resultados Esperados: $resultadosEsperados) \n";
        $carta .= " - Eval. Ex-Ante: $indicadoresEvaluación \n";
        $carta .= " - Carta Gantt: $cartaGantt \n";
        $carta .= " - Función Integrantes: $funcion_integrante \n";
        $carta .= " - Anexo 2: $anexo_2 \n";
        $carta .= " - Anexo 3: $anexo_3 \n";
        $carta .= " - Anexo 4.2:.$grafico \n";
        $carta .= " - Anexo 4.4: $objetivosEspecificos \n";
        $carta .= " - Rol Único Tributario de la Entidad Postulante: $rolUnicoTributario \n";
        $carta .= " - Cédula de Identidad del Representante Legal o Mandatario: $cedulaIdentidad \n";
        $carta .= " - Instrumento que Nombra al Representante Legal o Mandatario: $copiaSimpleInstrumento) \n\n";
        $carta .= "   Este comprobante certifica su postulación online. \n";
        $carta .= "Es importante considerar que la documentación adjunta en la postulación, su información y contenido, es deexclusiva responsabilidad de la entidad postulante del proyecto y debe cumplir con lo exigido en laspresentes bases. No obstante, esta será sometida al proceso de admisibilidad, donde se verificará que el contenidocorresponda a lo solicitado. De no cumplirse esta condición la iniciativa se considerará inadmisibl \n\n";
        $carta .= "Saludos! \n\n";


        //ENVIO DE CORREO A PERSONAL DEL GORE PARA SU POSTULACION
        $asunto2="NUEVA POSTULACION REGISTRADA EN EL SISTEMA";
        $gore  = "Nueva postulación realizada por: \n ";
        $gore .= "Sr(a): $nombreCoordinador con RUT $rutCoordinador y correo $emailCoordinador \n";
        $gore .= "El número identificador de su postulación es : $id_proyecto \n";    
        $gore .= "Nombre de proyecto: $nombreProyecto \n";
        $gore .= "Nombre de la entidad postulante: $nombreEntidad \n";
        $gore .= "Coordinador responsable del proyecto: $nombreCoordinador \n";
        $gore .= "Representante legal de la institución: $nombreRepresentante \n";
        $gore .= "Tipo de proyecto: $tipo_institucion \n\n";
        $gore .= " - Archivos adjuntos: \n";
        $gore .= " - Presupuesto: $presupuestoDetallado \n";
        $gore .= " - Resultados Esperados: $resultadosEsperados) \n";
        $gore .= " - Eval. Ex-Ante: $indicadoresEvaluación \n";
        $gore .= " - Carta Gantt: $cartaGantt \n";
        $gore .= " - Función Integrantes: $funcion_integrante \n";
        $gore .= " - Anexo 2: $anexo_2 \n";
        $gore .= " - Anexo 3: $anexo_3 \n";
        $gore .= " - Anexo 4.2:.$grafico \n";
        $gore .= " - Anexo 4.4: $objetivosEspecificos \n";
        $gore .= " - Rol Único Tributario de la Entidad Postulante: $rolUnicoTributario \n";
        $gore .= " - Cédula de Identidad del Representante Legal o Mandatario: $cedulaIdentidad \n";
        $gore .= " - Instrumento que Nombra al Representante Legal o Mandatario: $copiaSimpleInstrumento) \n\n";
        $gore .= "   Este comprobante certifica su postulación online. \n";

        $gore .= "Es importante considerar que la documentación adjunta en la postulación, su información y contenido, es deexclusiva responsabilidad de la entidad postulante del proyecto y debe cumplir con lo exigido en laspresentes bases. No obstante, esta será sometida al proceso de admisibilidad, donde se verificará que el contenidocorresponda a lo solicitado. De no cumplirse esta condición la iniciativa se considerará inadmisibl \n\n";

        $gore .= "Saludos! \n\n";
        
        // Enviando Mensaje Postulante
        mail($emailCoordinador, $asunto, $carta);
        // Enviando Mensaje Representante
        mail($emailRepresentante, $asunto, $carta);
        // Enviando Mensaje a evaluador (alguien del gobierno)
        mail($destinatario, $asunto2, $gore);
            
        

      

        //header('Location: completed.php');


?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../js/main.js"></script>
    <link rel="icon" type="image/jpg" href="../src/logoblanco.jpg">
    <title>Formulario de postulación - Ingresado correctamente</title>
    <style>
      .ctitulo {
        color: white;
      }

      .ctitulo2 {
        color: white;
        background: #006CB7;
        padding-left: 0.3%;
      }

      .gg1 {
        border-width: 1px;
        color: white;
        background-color: #006CB7;
      }
      .archivo1{
        border-color: #ffffff; border-width: 1px; background-color: #e5e5e5; border-style: solid;
      }
    </style>
</head>
<body>
<table width="100%" border="0" cellpadding="2" cellspacing="0">
      <tr bgcolor="#006CB7" class="header">
        <td class="pl-2" width="130"><a href="index.php"><img src="../src/logoblanco.jpg" width="150" height="150" /></a></td>
        <td colspan="3" valign="middle" class="ctitulo">
          <h2>Formulario Postulaci&oacuten FIC - Institución Pública</h2>
          <h3>Divisi&oacuten de Fomento e Industria<br>Gobierno Regional de O'Higgins</h3>
        </td>
        <td width="15%" align="right" valign="bottom">
          <p><br>
            <!--Version v.1.0<br>Actualizado al 02/06/2020 09:46:55
          </p>-->
        </td>
      </tr>
    </table>
    <hr align="center" width="75%" noshade="noshade">
    <div class="container">
        <div class="alert alert-success" role="alert">
            Saaaaaaaaaaaaaaaaaaaaaaaaaaaa proyecto se ha ingresado correctamente, puede descargar su comprobante <a href="<?php echo $_SESSION["comprobante"]; ?>" class="alert-link">Aquí</a>. El proyecto sera revisado por el personal encargado.
        </div>
        <?php 

            
            
            
            
        ?>
        <div class="row">
          <div class="col"></div>
          <div class="col pl-4"><a class="btn btn-primary" href="../index.html"><i class="fas fa-cloud"></i> Volver</a></div>
          <div class="col"></div>
        </div>
        
    </div>
</body>
</html>