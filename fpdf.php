<?php 

$nuevo_path="./php/proyectos/publicos/".$id_proyecto."/comprobante/";
				//CREA CARPETA OBJ_ESPECIFICO
				if (!file_exists('/home/pelfic/data/'.$id.'/comprobante')) {
				mkdir('/home/pelfic/data/'.$id.'/comprobante', 0777, true);
				}
        require('fpdf/fpdf.php');
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
        $pdf->Image('img/logo.jpg',10,8,33);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(0,5,utf8_decode('ACUSE DE RECIBO DE POSTULACIÓN'),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('FONDO DE INNOVACION PARA LA COMPETITIVIDAD (FIC) 2019'),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('N°'.$id),0,1,'C');
        $pdf->Cell(0,5,utf8_decode('Fecha: '.$hoy),0,1,'C');
        $pdf->SetTextColor(1,108,190);
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(0,20,utf8_decode('CONTENIDO DE POSTULACIÓN'),0,1);
        $pdf->SetFont('Arial','',11);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,5,utf8_decode('Nombre de proyecto: '.$nombreproyecto),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Nombre de la entidad postulante: '.$nombreentidad),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Coordinador responsable del proyecto: '.$nombrecoor),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->MultiCell(0,10,utf8_decode('Representante legal de la institución: '.$nombrerep),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->Cell(0,10,utf8_decode('Tipo de proyecto: '.$tipo_institucion),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,utf8_decode('____________________________________________________________________________'),0,1);
        $pdf->SetTextColor(1,108,190);
        $pdf->Cell(0,10,utf8_decode('ARCHIVOS ADJUNTOS'),0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->MultiCell(0,5,utf8_decode(' - Presupuesto: '.$name_presu),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Resultados Esperados: '.$name_resul),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Eval. Ex-Ante: '.$name_exan),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Carta Gantt: '.$name_calen),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Función Integrantes: '.$name_integ),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 2: '.$name_anexo2),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 3: '.$name_anexo3C),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 7: '.$name_anexo8),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 4.2: '.$name_graficoC),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Anexo 4.4: '.$name_objet),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Rol Único Tributario de la Entidad Postulante: '.$name_tributario),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Cédula de Identidad del Representante Legal o Mandatario: '.$name_cedula),0,1);
        $pdf->MultiCell(0,5,utf8_decode(' - Instrumento que Nombra al Representante Legal o Mandatario: '.$name_replegal),0,1);
        $pdf->Cell(0,10,utf8_decode('Este comprobante certifica su postulación online.'),0,1);
        $pdf->Cell(0,0,utf8_decode(''),0,1);
        $pdf->MultiCell(0,5,utf8_decode('Es importante considerar que la documentación adjunta en la postulación, su información y contenido, es de exclusiva responsabilidad de la entidad postulante del proyecto y debe cumplir con lo exigido en las presentes bases. '),0,1);
        $pdf->Cell(0,5,utf8_decode('No obstante, esta será sometida al proceso de admisibilidad, donde se verificará que el contenido'),0,1);
        $pdf->Cell(0,5,utf8_decode('corresponda a lo solicitado. De no cumplirse esta condición la iniciativa se considerará inadmisible.'),0,1);
        $pdf->Image('img/ie.jpeg',165,250,38,38,'JPEG', '');
        $pdf->Image('img/f.jpeg',10,289,38,33,'JPEG', '');
        $pdf->Output($nuevo_path.'/ComprobanteFIC.pdf', 'F');       
        
        ?>