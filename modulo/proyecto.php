<?php
    include '../php/db.php';

    $idProyecto = $_GET['id'];
//Datos proyecto
    $sqlProyecto = "SELECT * FROM proyecto WHERE id = $idProyecto ";
    foreach ($conn->query($sqlProyecto) as $row){
        $id_proyecto = $row['id'];
        $nombreProyecto = $row['nombre'];
        $nombreEntidad = $row['nombre_entidad'];
        $nombreEstado = $row['estado'];
    }
//datos Coordinador
    $sqlCoordinador = "SELECT * FROM coordinador WHERE id_proyecto = $idProyecto ";
    foreach ($conn->query($sqlCoordinador) as $row){
        $rutCoordinador = $row['rut'];
        $nombreCoordinador = $row['nombre'];
        $cargoCordinadoor = $row['cargo'];
        $numeroTelefono = $row['telefono'];
        $numeroCelular = $row['celular'];
        $emailCoordinador = $row['email'];
        $direccionCoordinador = $row['direccion'];
    }

//datos Representante
$sqlRepresentante = "SELECT * FROM representante_legal WHERE id_proyecto = $idProyecto ";
foreach ($conn->query($sqlRepresentante) as $row){
    $rutRepresentante = $row['rut'];
    $nombreRepresentante = $row['nombre'];
    $cargoRepresentante = $row['cargo'];
    $telefonoRepresentante = $row['telefono'];
    $celularRepresentante = $row['celular'];
    $emailRepresentante = $row['email'];
    $direccionRepresentante = $row['direccion'];
}

//2 antecedentes de la iniciativa
$sqlAntecedentes = "SELECT * FROM antecedentes_iniciativa WHERE id_proyecto = $idProyecto ";
foreach ($conn->query($sqlAntecedentes) as $row){
        
    $prioridadRegional = $row['prioridad_regional'];
    $destinoProyecto = $row['destino_proyecto'];
    $duracionSede = $row['duracion_sede_iniciativa'];
    $totalPresupuesto = $row['presupuesto_total'];
    $lugarEjecucion = $row['lugar_ejecucion'];
}
//3 arte
$sqlArte = "SELECT * FROM estado_arte WHERE id_proyecto = $idProyecto ";
foreach ($conn->query($sqlArte) as $row){
        
    $estadoArte = $row['estado_arte'];
}

//4 - Descripción de la Propuesta Técnica y Metodológica

$sqlNew = "SELECT * FROM descripcion_propuesta WHERE id_proyecto = $idProyecto ";
foreach ($conn->query($sqlNew) as $row){
        
    $problemaOportunidad = $row['problema_oportunidad'];
    $meritoInnovador = $row['merito_innovador'];
    $descripcionResultados = $row['descripcion_resultados'];
    $objetivoGeneral = $row['objetivo_general'];
    $indicadorResultado = $row['indicador_resultado'];
    $metaIndicador = $row['meta_indicador'];
    $mediosVerificacion = $row['medios_verificacion'];

    $beneficiariosNumHombres = $row['beneficiarios_num_hombres'];
    $beneficiariosTextHombres = $row['beneficiarios_text_hombres'];
    $beneficiariosNumMujeres = $row['beneficiarios_num_mujeres'];
    $beneficiariosTextMujeres = $row['beneficiarios_text_mujeres'];
    $beneficiariosNumEmpresa = $row['beneficiarios_num_empresas'];
    $beneficiariosTextEmpresa = $row['beneficiarios_text_empresas'];

    $metodologiaProyecto = $row['metodologia_proyecto'];
    $actividadesDifusion = $row['actividades_difusion'];
    $mecanismosTransferencias = $row['mecanismos_transferencias'];
    $modeloSustentabilidad = $row['modelo_sustentabilidad'];
    $planContingencia = $row['plan_contingencia'];
    $bibliografiaReferencial = $row['bibliografia_referencial'];


}



//adjuntos
    $sqlAnexos = "SELECT * FROM anexos WHERE id_proyecto = $idProyecto ";
    foreach ($conn->query($sqlAnexos) as $row){
        $anexo2 = $row['anexo_2'];
        $anexo3 = $row['anexo_3'];
        $graficoImagen = $row['grafico_imagen'];
        $objetivosEspecificos = $row['objetivos_especificos'];
        $anexo6 = $row['anexo_6'];
        $presupuestoDetallado = $row['presupuesto_detallado'];
        $resultadosEsperados = $row['resultados_esperados'];
        $indicadorEvaluacion = $row['indicador_evaluacion'];
        $cartaGantt = $row['carta_gantt'];
        $funcionIntegrantes = $row['funcion_integrantes'];
        $copiaRolTributario = $row['copia_rol_tributario'];
        $copiaCedulaIdentidad = $row['copia_cedula_identidad'];
        $copiaInstrumento = $row['copia_instrumento'];
        $cartaAutoridad = $row['carta_autoridad'];
        $antecedentesRelevantes = $row['antecedentes_relevantes'];
        $copiaCertificadoVigencia = $row['copia_certificado_vigencia'];
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Información del proyecto</title>
</head>
<body>
<div class="container">

    <div class="jumbotron">
        <h3 class="display-5"> Información del proyecto </h2>
        <hr class="my-4">
        <p>Nombre: <?php echo $nombreProyecto; ?></p>
        <p>Entidad: <?php echo $nombreEntidad; ?></p>
        <p>Estado: <?php echo $nombreEstado; ?> </p>
        <form name="estado" method="post">
        <select name="update">
            <option 1 value="<?php echo $nombreEstado;?>">Seleccione el estado del proyecto</option>
            <option 2 value="Aprobado">Aprobado</option>
            <option 3 value="Aprobado">Pendiente</option>
            <option 4 value="Rechazado">Rechazado</option>
        </select></p>
        <button class="btn btn-primary" type="submit" value="Actualizar">Aplicar</button>
        <?php 
        
        if (isset($_POST['update'])) {
            $newEstado = $_POST['update'];
            $sSQL="UPDATE proyecto Set estado='$newEstado' Where id='$idProyecto'";
            $conn->query($sSQL);

        }
        
        
        ?>
        </form>

        <br>

        <h3 class="display-5"> Antecedentes Generales </h2>
        <hr class="my-4">
        <table class="table" >
            <tr>
                <td colspan="2">Coordinador Responsable del Proyecto</td>
                <td colspan="2">Representante Legal de la Institución</td>
            </tr>
                <td>Rut</td>
                <td><?php echo $rutCoordinador; ?></td>
                <td>Rut</td>
                <td><?php echo $rutRepresentante; ?></td>
            <tr>
            
                <td>Nombre</td>
                <td><?php echo $nombreCoordinador; ?></td>
                <td>Nombre</td>
                <td><?php echo $rutRepresentante; ?></td>
            </tr>
            <tr>
                <td>Cargo</td>
                <td><?php echo $cargoCordinadoor; ?></td>
                <td>Cargo</td>
                <td><?php echo $cargoRepresentante; ?></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><?php echo $numeroTelefono; ?></td>
                <td>Teléfono</td>
                <td><?php echo $telefonoRepresentante; ?></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><?php echo $numeroCelular; ?></td>
                <td>Celular</td>
                <td><?php echo $celularRepresentante; ?></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><?php echo $emailCoordinador; ?></td>
                <td>Correo</td>
                <td><?php echo $emailRepresentante; ?></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><?php echo $direccionCoordinador; ?></td>
                <td>Dirección</td>
                <td><?php echo $direccionRepresentante; ?></td>
            </tr>
        </table>
        <br>
        <h3 class="display-5">Antecedentes de la Iniciativa</h2>
        <hr class="my-4">
        <table class="table">
            <tr>
                <td>Prioridad Regional que Abordará la Iniciativa</td>
                <td><?php echo $prioridadRegional;  ?></td>
            </tr>
            
            <tr>
                <td>Destino del Proyecto</td>
                <td><?php echo $destinoProyecto;  ?></td>
            </tr>
            
            <tr>
                <td>Duración y Sede de la Iniciativa</td>
                <td><?php echo $duracionSede;  ?></td>
            </tr>
            <tr>
                <td>Lugar o Lugares de Ejecución de la Iniciativa</td>
                <td><?php echo $lugarEjecucion;  ?></td>
            </tr>
            <tr>
                <td>Presupuesto total</td>
                <td><?php echo $totalPresupuesto;  ?></td>
            </tr>
            <tr>
                <td>Estado arte</td>
                <td><?php echo $estadoArte;  ?></td>
            </tr>
            
        </table>
    <br>
        
    <h3 class="display-5">Antecedentes de la Iniciativa</h2>
        <hr class="my-4">
        <p>Problema identificado u oportunidad que se desea abordar:</p>
        <?php echo $problemaOportunidad; ?><br>
        <hr class="my-4">
        
        <p>Mérito innovador de la iniciativa:</p>
        <?php echo $meritoInnovador; ?>
        <hr class="my-4">
        <p>Descripción de los resultados del proyecto en relación al destino seleccionado:</p>
        <?php echo $descripcionResultados; ?>
        <br>
        <hr class="my-4">
        <p>Objetivo General:</p>
        <?php echo $objetivoGeneral; ?>
        <hr class="my-4">
        <p>Indicador de resultado de Objetivo General:</p>
        <?php echo $indicadorResultado; ?>
        <hr class="my-4">
        <p>Meta de Indicador de resultado:</p>
        <?php echo $metaIndicador; ?>
        <hr class="my-4">
        <p>Medios de Verificación:</p>
        <?php echo $mediosVerificacion; ?>

        <hr class="my-4">
        <p>Beneficiarios hombres: <?php echo $beneficiariosNumHombres; ?></p>
        <?php echo $beneficiariosTextHombres; ?>

        <hr class="my-4">
        <p>Beneficiarios mujeres: <?php echo $beneficiariosNumMujeres; ?></p>
        <?php echo $beneficiariosTextMujeres; ?>
        
        <hr class="my-4">
        <p>Beneficiarios empresas: <?php echo $beneficiariosNumEmpresa; ?></p>
        <?php echo $beneficiariosTextEmpresa; ?>

        <hr class="my-4">
        <p>Metodología a Aplicar en el Proyecto:</p>
        <?php echo $metodologiaProyecto; ?>

        <hr class="my-4">
        <p>Actividades de Difusión y Divulgación Científica:</p>
        <?php echo $actividadesDifusion; ?>

        <hr class="my-4">
        <p>Mecanismos de Transferencia Tecnológica :</p>
        <?php echo $mecanismosTransferencias; ?>

        <hr class="my-4">
        <p> Modelo de Sustentabilidad:</p>
        <?php echo $modeloSustentabilidad; ?>

        <hr class="my-4">
        <p> Plan de Contingencia :</p>
        <?php echo $planContingencia; ?>

        <hr class="my-4">
        <p>Bibliografía Referencial :</p>
        <?php echo $bibliografiaReferencial; ?>

        <br><br><br><br>
        

        <h3 class="display-5"> Archivos adjuntos </h2>
        <hr class="my-4">
        <table>
            <tr>
                <td>Objetivos Específicos</td>
                <td class="pl-4"><a href="../php/<?php echo $objetivosEspecificos; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Resultados Esperados e Indicadores de Resultados</td>
                <td class="pl-4"><a href="../php/<?php echo $resultadosEsperados; ?>"> Descargar</a></td>
            </tr>
            
            <tr>
                <td>Indicadores de evaluación Ex-ante</td>
                <td class="pl-4"><a href="../php/<?php echo $indicadorEvaluacion; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Carta Gantt</td>
                <td class="pl-4"><a href="../php/<?php echo $cartaGantt; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Carta de Declaración de Responsabilidad</td>
                <td class="pl-4"><a href="../php/<?php echo $anexo2; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Formatos de Cartas</td>
                <td class="pl-4"><a href="../php/<?php echo $anexo3; ?>"> Descargar</a></td>
            </tr>
            
            <tr>
                <td>Gráfico e Imágen</td>
                <td class="pl-4"><a href="../php/<?php echo $graficoImagen; ?>"> Descargar</a></td>
            </tr>
            
            <tr>
                <td>Formato de Carta Compromiso Costos de Operación Post Proyecto</td>
                <td class="pl-4"><a href="../php/<?php echo $anexo6; ?>"> Descargar</a></td>
            </tr>
            
            <tr>
                <td>Presupuesto detallado del proyecto</td>
                <td class="pl-4"><a href="../php/<?php echo $presupuestoDetallado; ?>"> Descargar</a></td>
            </tr>
            
            <tr>
                <td>Función de cada integrante del proyecto y horas dedicadas</td>
                <td class="pl-4"><a href="../php/<?php echo $funcionIntegrantes; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Copia simple del Rol Único Tributario de la Entidad postulante</td>
                <td class="pl-4"><a href="../php/<?php echo $copiaRolTributario; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td>Copia simple de la Cédula de Identidad del representante legal o mandatario</td>
                <td class="pl-4"><a href="../php/<?php echo $copiaCedulaIdentidad; ?>"> Descargar</a></td>
            </tr>
            <tr>
                <td> Copia simple del instrumento que nombra al representante legal o mandatario y del que lo faculta para firmar</td>
                <td class="pl-4"><a href="../php/<?php echo $copiaInstrumento; ?>"> Descargar</a></td>
            </tr>
            <?php 

                if (!empty($cartaAutoridad)) {

                    echo "
                    <tr>
                        <td>Opcional - Carta de la autoridad sectorial o territorial</td>
                        <td class='pl-4'><a href='../php/$cartaAutoridad'> Descargar</a></td>
                    </tr>";
                }
                
                
                if (!empty($cartaAutoridad)) {

                    echo "
                    <tr>
                        <td>Opcional - Incorporar adicionalmente antecedentes relevantes de la iniciativa</td>
                        <td class='pl-4'><a href='../php/$antecedentesRelevantes'> Descargar</a></td>
                    </tr>";
                }
            ?>
            
        </table>
        <br>

        <?php 

        if (!empty($copiaCertificadoVigencia)) {
            
        echo "<h3 class='display-5'> Archivos adjuntos privados </h2>
        <hr class='my-4'>
        <table>
            <tr>
                <td>Copia certificado vigencia </td>
                <td class='pl-4'><a href='../php/$copiaCertificadoVigencia'> Descargar</a></td>
            </tr>
        </table>";
        }
        ?>

        <p></p>
    </div>

</div>
    
</body>
</html>