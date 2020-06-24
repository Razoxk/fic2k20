<!DOCTYPE html>
  <html lang="en">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/main.js"></script>    
    <link rel="icon" type="image/jpg" href="src/logoblanco.jpg">
    <title>POSTULACION PÚBLICA</title>
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
        <td width="130"><a href="index.php"><img src="src/logoblanco.jpg" width="150" height="150" /></a></td>
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
    <!-- ITEM 1 -->
    
    <script>
    function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>
      <div class="container">
      <form id="formulario" name="formulario" method="POST" action="php/submit.php" enctype="multipart/form-data" onsubmit="return Comprobar()">
      <div class="container">
        <h4 class="ctitulo2 rounded-lg">1 - Antecedentes Generales</h4>
        <h4>1.1 Nombre de Proyecto</h4><input type="text" name="nombreProyecto" class="form-control" required maxlength="50"><br>
        <h4>1.2 Nombre entidad de postulante</h4><input type="text" name="nombreEntidad" class="form-control" required maxlength="40"><br>
        <h4>1.3 Coordinador Responsable del Proyecto</h4>
        <h6 class="alert alert-secondary col-md-8">(Es quien está a cargo de la administración y será el responsable de la
          calidad de ejecución y del fiel cumplimiento de los compromisos contraídos en él.) </h6>
        <table>
          <tbody>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;"  >Rut</td>
              <td><input type="text" id="rut" name="rutCoordinador" required oninput="checkRut(this)" placeholder="Ingrese RUT" maxlength="10" class="form-control"></td>
              
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Nombre Completo</td>
              <td><input type="text" name="nombreCoordinador" class="form-control"  required maxlength="254"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Cargo Institucion</td>
              <td><input type="text" name="cargoCoordinador" class="form-control" required maxlength="254"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Numero de telefono +56</td>
              <td><input type="text" name="telefonoCoordinador" class="form-control" required maxlength="9"></td>
            </tr>
            <tr>
            <td class="border border-white pl-2" style="background: #E2E3E5;">Numero de celular &nbsp;&nbsp;&nbsp;+56</td>
              <td><input type="text" name="celularCoordinador" class="form-control" required maxlength="9" placeholder="9XXXXXXXX"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Email</td>
              <td><input type="email" name="emailCoordinador" required maxlength="50" class="form-control" placeholder="Ejemplo: correo@correo.com"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Direccion</td>
              <td><input type="text" name="direccionCoordinador" class="form-control" required maxlength="254"></td>
            </tr>
          </tbody>
        </table><br>
        <h4>1.4 Representante Legal de la Institución</h4>
        <table>
          <tbody>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Rut</td>
              <td>  <input type="text" id="rut" name="rutRepresentante" required oninput="checkRut(this)" maxlength="10" placeholder="Ingrese RUT" class="form-control"></td>
            
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Nombre Completo</td>
              <td><input type="text" name="nombreRepresentante" class="form-control" required maxlength="254"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Cargo Institucion</td>
              <td><input type="text" name="cargoRepresentante" class="form-control" required maxlength="254"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Numero de telefono&nbsp;+56</td>
              <td><input type="text" name="numeroRepresentante" class="form-control" required maxlength="9" placeholder="9XXXXXXXX"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Numero de celular &nbsp;&nbsp;&nbsp;+56</td>
              <td><input type="text" name="celularRepresentante" class="form-control" required maxlength="9" placeholder="9XXXXXXX"></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Email</td>
              <td><input type="email" name="emailRepresentante" class="form-control"placeholder="Ejemplo: correo@correo.com" required maxlength="50" ></td>
            </tr>
            <tr>
              <td class="border border-white pl-2" style="background: #E2E3E5;">Direccion</td>
              <td><input type="text" name="direccionRepresentante" class="form-control" required maxlength="254"></td>
            </tr>
          </tbody>
        </table>
      <br>

      <!-- ITEM 1 -->


        <!-- ITEM 2 -->
        <h4 class="ctitulo2 rounded-lg">2 - Antecedentes de la Iniciativa</h4>
            <h4>2.1 Prioridad Regional que Abordará la Iniciativa</h4>
            <h6 class="alert alert-secondary col-md-4">Sólo se podrá marcar una casilla. <br>Indicar la que tenga mayor
              relevancia con la iniciativa propuesta.</h6>
            
            <div class="row container">
              <div  align="center" class="col-md-3 border border-dark" style="background: #E2E3E5;" ><b>PROGRAMAS</b></div>
              <div class="col-md-1 border border-dark" style="background: #E2E3E5;"></div>
              <div align="center" class="col-md-4 border border-dark" style="background: #E2E3E5;"><b>PROYECTOS Y/O ACCIONES</b></div>
            </div> 

            <!-- 2.1 -->

            <div class="row container" >
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Tecnificación del riego pequeños productores utilizando ERNC. </div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="Tecnificación del riego pequeños productores utilizando ERNC" name="options1" id="option1" ></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >  I+D+i para nuevos revestimientos para canales de distribución de agua.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="I+D+i para nuevos revestimientos para canales de distribución de agua" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >  Agricultura de precisión para certificado orgánico.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Agricultura de precisión para certificado orgánico." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >  I+D+i para apoyo al reciclaje y la valorización de los de desechos y subproductos de las actividades productivas regionales: minería, agropecuario, construcción y turismo.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="I+D+i para apoyo al reciclaje y la valorización de los de desechos y subproductos de las actividades productivas regionales: minería, agropecuario, construcción y turismo." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" >1.1 La Promoción de la Economia Circular</div>
            <div class="col-md-1 border-left border-dark" style="background: #E2E3E5;"><input value="La Promoción de la Economia Circular" type="radio" name="options1" id="options1"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >I+D+i para la: gestión y manejo de los recursos hídricos; mejora de la calidad del agua; optimización y reutilización del agua de riego y su tecnificación.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="I+D+i para la: gestión y manejo de los recursos hídricos; mejora de la calidad del agua; optimización y reutilización del agua de riego y su tecnificación." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >    La promoción y el apoyo para la utilización de ERNC y mejora de la eficiencia energética de los procesos productivos y en la prestación de servicios (turismo).</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="La promoción y el apoyo para la utilización de ERNC y mejora de la eficiencia energética de los procesos productivos y en la prestación de servicios (turismo)." name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >      I+D+i para favorecer la seguridad, trazabilidad e inocuidad alimentaria relacionadas con el uso del agua o la valorización de subproductos agrícolas.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="I+D+i para favorecer la seguridad, trazabilidad e inocuidad alimentaria relacionadas con el uso del agua o la valorización de subproductos agrícolas." name="options1" id="option1"></div>
            </div>

            <!-- 1.1 -->

            <!-- 1.2 -->
            <div class="row container">
            <div  class="col-md-3 border-left border-top border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-top border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Desarrollo de nuevas variedades mejoradas y adaptadas tanto a los efectos del cambio climático, como a los requerimientos del mercado.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Desarrollo de nuevas variedades mejoradas y adaptadas tanto a los efectos del cambio climático, como a los requerimientos del mercado." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" >1.2 Diversificación y adaptación de los cultivos al cambio climático</div>
            <div class="col-md-1 border-left border-dark" style="background: #E2E3E5;"><input value="Diversificación y adaptación de los cultivos al cambio climático" type="radio" name="options1" id="options1"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Introducción de nuevos cultivos y nuevas variedades (especies) adaptados a las nuevas condiciones climatológicas e instrumentar programas de cultivos adaptados a las condiciones locales (secano, regadío)</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Introducción de nuevos cultivos y nuevas variedades (especies) adaptados a las nuevas condiciones climatológicas e instrumentar programas de cultivos adaptados a las condiciones locales (secano, regadío)" type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-bottom border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-bottom border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Gestión integrada de plagas o Manejo Ecológico de Plagas (MEP)</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Gestión integrada de plagas o Manejo Ecológico de Plagas (MEP)" type="radio" name="options1" id="option1"></div>
            </div>
            <!-- 1.2 -->


            <!-- 2.1 -->
           
            <div class="row container">
            <div  class="col-md-3 border-left border-bottom border-dark" style="background: #E2E3E5;" >2.1 Desarrollo de nuevos productos y servicios por parte de pequeños productores y pequeñas empresas</div>
            <div  class="col-md-1 border-left border-bottom border-dark" style="background: #E2E3E5;"><input value="2.1 Desarrollo de nuevos productos y servicios por parte de pequeños productores y pequeñas empresas" type="radio" name="options1" id="options1"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >PROYECTO TERRITORIAL: Desarrollo Línea Gourmet Productos Locales (CARDENAL CARO)</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="PROYECTO TERRITORIAL: Desarrollo Línea Gourmet Productos Locales (CARDENAL CARO)" type="radio" name="options1" id="option1"></div>
            </div>
           
            <!-- 2.1 -->


          <!-- 2.2 -->
          <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >PROYECTO TERRITORIAL: Consorcio Regional para la Gestión Tecnológica y Social (CACHAPOAL)</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="PROYECTO TERRITORIAL: Consorcio Regional para la Gestión Tecnológica y Social (CACHAPOAL)" type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Proyectos Innovadores para responder a los desafíos de las grandes y medianas empresas y los servicios públicos de la Región de O’Higgins.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Proyectos Innovadores para responder a los desafíos de las grandes y medianas empresas y los servicios públicos de la Región de O’Higgins." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" >2.2 Incorporación de tecnologías, emprendimientos y servicios 4.0.</div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"><input value="Incorporación de tecnologías, emprendimientos y servicios 4.0" type="radio" name="options1" id="options1"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >La incorporación de tecnologías 4.0 por parte de pequeños productores y pequeñas empresas, para la adquisición de ventajas competitivas.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="La incorporación de tecnologías 4.0 por parte de pequeños productores y pequeñas empresas, para la adquisición de ventajas competitivas." type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Emprendimiento innovador, que aproveche las oportunidades que se abren en la extensión de las tecnologías 4.0.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Emprendimiento innovador, que aproveche las oportunidades que se abren en la extensión de las tecnologías 4.0" type="radio" name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-bottom border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-bottom border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Servicios avanzados de apoyo a los sectores económicos de la región, minería, agroindustria, construcción y ERNC, que requieren este tipo de tecnologías y que demandan servicios avanzados</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Servicios avanzados de apoyo a los sectores económicos de la región, minería, agroindustria, construcción y ERNC, que requieren este tipo de tecnologías y que demandan servicios avanzados" type="radio" name="options1" id="options1"></div>
            </div>
           
          <!-- 2.2 -->



          <!-- 2.3 -->

          <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >PROYECTO TERRITORIAL: Capital Humano y puesta en valor de productos regionales (COLCHAGUA)</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="PROYECTO TERRITORIAL: Capital Humano y puesta en valor de productos regionales (COLCHAGUA)" type="radio" name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left  border-dark" style="background: #E2E3E5;" >2.3 Puesta en valor en el mercado de los productos, servicios regionales, patrimonio arquitectónico y físico o natural.</div>
            <div  class="col-md-1 border-left  border-dark" style="background: #E2E3E5;"><input type="radio" value="Puesta en valor en el mercado de los productos, servicios regionales, patrimonio arquitectónico y físico o natural." name="options1" id="options1"></div>
            <div  class="col-md-4 border  border-dark" style="background: #E2E3E5;" >Sello/Marca de Origen y Sustentabilidad Regional.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="Sello/Marca de Origen y Sustentabilidad Regional." name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-bottom border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left  border-bottom border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Rutas Región de O’Higgins.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="Rutas Región de O’Higgins." name="options1" id="options1"></div>
            </div>

          <!-- 2.3 -->


          <!-- 3.1 -->

            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Consorcio Regional para Información, formación y extensionismo para el cambio climático</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input type="radio" value="Consorcio Regional para Información, formación y extensionismo para el cambio climático" name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" >3.1 Información, Formación y Extensionismo</div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"><input type="radio" value="Información, Formación y Extensionismo" name="options1" id="options1"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >PROYECTO TERRITORIAL: Extensión de la oferta de Formación Técnica a la provincia de Cardenal Caro.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="PROYECTO TERRITORIAL: Extensión de la oferta de Formación Técnica a la provincia de Cardenal Caro." type="radio" name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >Información para: </div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Información para:" type="radio" name="options1" id="options1"></div>
            </div><div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" > Las tecnologías 4.0 </div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Las tecnologías 4.0" type="radio" name="options1" id="option1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" > Cambio climático y sustentabilidad ambiental.</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Cambio climático y sustentabilidad ambiental." type="radio" name="options1" id="options1"></div>
            </div>
            <div class="row container">
            <div  class="col-md-3 border-left border-bottom border-dark" style="background: #E2E3E5;" ></div>
            <div  class="col-md-1 border-left border-bottom border-dark" style="background: #E2E3E5;"></div>
            <div  class="col-md-4 border border-dark" style="background: #E2E3E5;" >La promoción y la comercialización. </div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="La promoción y la comercialización." type="radio" name="options1" id="options1"></div>
            </div>


          <!-- 3.1 -->


          <!--3.2-->
          <div class="row container">
              <div class="col-md-3 border-left border-bottom border-rigth border-dark" style="background: #E2E3E5;">3.2 Inducción para la colaboración, la asociatividad y la innovación abierta</div>
              <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value=" Inducción para la colaboración, la asociatividad y la innovación abierta" type="radio" name="options1" id="options1"></div>
              <div class="col-md-4 border-left border-bottom border-dark" style="background: #E2E3E5;">Todas las iniciativas postuladas deben considerar acciones de colaboración entre los actores del sistema regional de innovación e innovación abierta.</div>
              <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value=" Todas las iniciativas postuladas deben considerar acciones de colaboración entre los actores del sistema regional de innovación e innovación abierta." type="radio" name="options1" id="options1"></div>
            </div>
          <!--3.2-->
          
<!--------------------------------------------------------------------------------->
            <h4 class="pt-5">2.2 Destino del Proyecto</h4>
            <!-- <h1>TABLA</h1> -->
            <div class="row container"> 
            <div class="col-md-4 border-left border-top border-dark"></div>
            <div class="col-md-4 border-left border-top border-dark">1) Investigación aplicada</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Investigación aplicada" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left  border-bottom border-dark">a) Investigación</div>
            <div class="col-md-4 border-left border-top border-dark">2) Desarrollo experimental</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Desarrollo experimental" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left  border-dark"></div>
            <div class="col-md-4 border-left border-top border-dark">1) Innovación Empresarial</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Innovación Empresarial" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left  border-dark"></div>
            <div class="col-md-4 border-left border-top border-dark">2) Innovación Pública</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Innovación Pública" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left border-bottom border-dark">b) Innovación</div>
            <div class="col-md-4 border-left border-top border-dark">3) Innovación Social</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Innovación Social" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left  border-dark"></div>
            <div class="col-md-4 border-left border-top  border-dark">1) Difusión Tecnológica</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Difusión Tecnológica" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container"> 
            <div class="col-md-4 border-left  border-dark">c) Difusión y transferencia tecnológica</div>
            <div class="col-md-4 border-left border-top border-dark">2) Transferencia Tecnológica</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="Transferencia Tecnológica" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container">
            <div class="col-md-8 border border-dark">d) La formación, inserción y atracción de recursos humanos especializados</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="La formación, inserción y atracción de recursos humanos especializados" type="radio" name="destino" id="destino"></div>
            </div>
            <div class="row container">
            <div class="col-md-8 border border-dark">e) El fomento de la cultura del emprendimiento y la innovación</div>
            <div align="center" class="pt-2 col-md-1 border border-dark" style="background: #E2E3E5;"><input value="El fomento de la cultura del emprendimiento y la innovación" type="radio" name="destino" id="destino"></div>
            </div>
          
<!--------------------------------------------------------------------------------->            
            <h4 class="pt-5">2.3 Duración y Sede de la Iniciativa</h4>
            <h6 class="alert alert-secondary col-md-3">Duración Total (en meses, máximo 36 meses):</h6><input type="text" required name="duracionSede" class="form-control col-md-1" maxlength="2"><br>
            <h4>Lugar o Lugares de Ejecución de la Iniciativa</h4>
            <h6 class="alert alert-secondary col-md-5">(Comunas y localidades de la Región de O'Higgins donde se ejecutarán las
              actividades) </h6>
            <input type="text" name="lugar_ejecucion" class="form-control col-md-4" required><br>
            <h4>2.4 Presupuesto</h4>

            
            <?php
            include ("php/sum.php");
            ?>
          
<!--------------------------------------------------------------------------------->             
          
          
          <!-- ITEM 2 -->
             <!-- ITEM 3 -->
              
             <h4 class="ctitulo2 rounded-lg">3 - Estado del Arte</h4>
                <h6 class="alert alert-secondary col-md-7"> (Indicar qué existe en Chile y en el extranjero relacionado con la
                  innovación propuesta, incluyendo información cualitativa y cuantitativa, citando las fuentes
                  utilizadas (máximo 10.000 caracteres).</h6> 
                  <textarea rows="30" name="estado" class="form-control mb-2" cols="123" maxlength="10000" required style=" resize:none;" placeholder="Máximo 10.000 caracteres" ></textarea>
              
              <!-- ITEM 3 -->
              

<!-- AQUI VA LO CORTADO -->
<!-- ITEM 4 -->
                  
        <h4 class="ctitulo2 rounded-lg">4 - Descripción de la Propuesta Técnica y Metodológica</h4>
            <h4>4.1 Problema identificado u oportunidad que se desea abordar </h4>
                <h6 class="alert alert-secondary"> (Indicar qué existe en Chile y en el extranjero relacionado con
                      la innovación propuesta, incluyendo información cualitativa y cuantitativa, citando las fuentes
                      utilizadas (máximo 10.000 caracteres).</h6> 
                <textarea rows="7" name="problema_oportunidad" id="problema_oportunidad" cols="123" class="form-control" maxlength="10000" style=" resize:none;" required="" placeholder="Máximo 10.000 caracteres"></textarea><br><br>
                    
            <h4>4.2 Mérito innovador de la iniciativa </h4>
                <h6 class="alert alert-secondary"> (Deberá indicar la novedad, originalidad y los aspectos
                      diferenciadores del producto, proceso o servicio respecto de lo que existe actualmente y su grado
                      de innovación e inexistencia de la innovación propuesta, dentro del país o región)</h6> 
                      <textarea rows="7" name="merito_innovador" id="merito_innovador" cols="123" class="form-control" maxlength="10000" style=" resize:none;" required="" placeholder="Máximo 10.000 caracteres"></textarea><br>
                    <h6 class="alert alert-primary">La descarga y subida de los "Gráfico e Imágen"se ubica en el ítem
                      final: "Anexos y Documentación para Adjuntar"</h6><br>
                    
            <h4>4.3 Descripción de los resultados del proyecto en relación al destino seleccionado </h4>
                    <h6 class="alert alert-secondary"> (Investigación y desarrollo; innovación en y para las empresas;
                      difusión y transferencia tecnológica; aceleración del emprendimiento innovador; formación,
                      inserción y atracción de recursos humanos especializados; fortalecimiento de redes para la
                      innovación y equipamiento de apoyo a la competitividad (remitirse al punto 3 de las bases) </h6>
                    <textarea rows="7" name="descripcion_resultados" id="descripcion_resultados" class="form-control" cols="123" maxlength="10000" style=" resize:none;" required=""
                      placeholder="Máximo 10.000 caracteres"></textarea>
            
            
            <h4>4.4 Objetivos (General y Específicos)</h4>
                    <table>
                      <tbody>
                        <tr>
                          <td class="border border-white" style="background: #E2E3E5;">Objetivo General &nbsp; </td>
                          <td><input type="text" name="objetivo_general"  required class="form-control"></td>
                        </tr>
                        <tr>
                          <td class="border border-white" style="background: #E2E3E5;">Indicador de resultado de
                            Objetivo General &nbsp; </td>
                          <td><input type="text" name="indicador_resultado"  required class="form-control"></td>
                        </tr>
                        <tr>
                          <td class="border border-white" style="background: #E2E3E5;">Meta de Indicador de resultado
                            &nbsp; </td>
                          <td><input type="text" name="meta_indicador"  required class="form-control"></td>
                        </tr>
                        <tr>
                          <td  required class="border border-white" style="background: #E2E3E5;">Medios de Verificación &nbsp;
                          </td>
                          <td><input type="text" name="medios_verificacion"  required class="form-control"></td>
                        </tr>
                      </tbody>
                    </table>


                   <div class="row container pb-5"><h6 class="pt-1">La subida de los "Objetivos Específicos" se ubica aquí</h6>
                   <input class="pl-4" required type="file" name="archivo4" id="">
                   </div>


                    <h4>4.5 Resultados Esperados e Indicadores de Resultados</h4>
                    <div class="row container pb-5"><h6 class="pt-1">La descarga y subida de los "Resultados Esperados e Indicadores de Resultados" se ubica aquí</h6><a class="pl-4" href="src/anexos/resultados_esperados.xlsx" download="resultados_esperados.xlsx"> Descargar</a>
                   <input class="pl-4" required="" type="file" name="archivo7" id="archivo7">
                   </div>
                    <h4>4.6 Indicadores de Evaluación Ex-ante</h4>
                    <div class="row container pb-5"><h6 class="pt-1">La descarga y subida de los "Indicadores de evaluación Ex-ante" se ubica aquí</h6><a class="pl-4" href="src/anexos/indicadores_evaluacion_ex-ante.xlsx" download="indicadores_evaluacion_ex-ante.xlsx"> Descargar</a>
                   <input class="pl-4" required="" type="file" name="archivo8" id="archivo8">
                   </div>
                    <h4>4.7 Beneficiarios Directos</h4>
                    <h6 class="alert alert-primary">(Consistente con los resultados esperados del proyecto)</h6>                
                    <table width="70%" border="0">
                      <tbody>
                        <tr>
                          <td class="gg1 pl-2">Tipo</td>
                          <td class="gg1 pl-2">Numero</td>
                          <td class="gg1 pl-2">Descripcion</td>
                        </tr>
                        <tr>
                          <td class="border border-white pl-2" style="background: #E2E3E5;">Beneficiarios Hombres</td>
                          <td><input type="text" name="beneficiarios_num_hombres"  required class="form-control col-md-8"maxlength="11"></td>
                          <td><input type="text" name="beneficiarios_text_hombres"  required class="form-control col-md-11" maxlength="10000" placeholder="Máximo 10.000 caracteres">
                        </tr>
                        <tr>
                          <td class="border border-white pl-2" style="background: #E2E3E5;">Beneficiarios Mujeres</td>
                          <td><input type="text" name="beneficiarios_num_mujeres"  required class="form-control col-md-8"maxlength="11"></td>
                          <td><input type="text" name="beneficiarios_text_mujeres"  required class="form-control col-md-11" maxlength="10000" placeholder="Máximo 10.000 caracteres"></td>
                        </tr>
                        <tr>
                          <td class="border border-white pl-2" style="background: #E2E3E5;">Empresas Beneficiadas</td>
                          <td><input type="text" name="beneficiarios_num_empresas"  required class="form-control col-md-8"maxlength="11"></td>
                          <td><input type="text" name="beneficiarios_text_empresas"  required class="form-control col-md-11" maxlength="10000" placeholder="Máximo 10.000 caracteres"></td>
                        </tr>
                      </tbody>
                    </table><br>
                    <h4>4.8 Metodología a Aplicar en el Proyecto</h4>
                    <textarea rows="7" name="metodologia_proyecto" cols="123" maxlength="10000" placeholder="Máximo 10.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                    
                    <h4>4.9 Actividades de Difusión y Divulgación Científica</h4>
                    <h6 class="alert alert-primary">(Describir los mecanismos a utilizar e indicar las acciones a realizar)</h6>
                    <textarea rows="7" name="actividades_difusion" cols="123" maxlength="10000" placeholder="Máximo 10.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                    
                    <h4>4.10 Mecanismos de Transferencia Tecnológica </h4>
                    <h6 class="alert alert-primary">(Describir los mecanismos a utilizar e indicar las acciones a realizar)</h6>
                    <textarea rows="7" name="mecanismos_transferencias" cols="123" maxlength="10000" placeholder="Máximo 10.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                    
                    <h4>4.11 Modelo de Sustentabilidad  </h4>
                    <h6 class="alert alert-primary">(Describir el modelo propuesto para dar continuidad a la iniciativa, una vez terminada la intervención del proyecto. Se deberá entregar certificado de responsabilidad de la Institución que se hará cargo de la operación post proyecto y de sus costos de mantención). </h6>
                    <textarea rows="7" name="modelo_sustentabilidad" cols="123" maxlength="10000" placeholder="Máximo 5.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                    
                    <h4>4.12 Calendarización de Actividades</h4>
                    <div class="row container pb-5"><h6 class="pt-1">La subida de la "Carta Gantt" se ubica aquí</h6><a class="pl-4" href="src/anexos/formato_carta_gantt_2020.xls" download="formato_carta_gantt_2020.xls"> Descargar</a>
                   <input class="pl-4" required="" type="file" name="archivo9" id="archivo9">
                   </div>
                    
                    <h4>4.13 Plan de Contingencia</h4>
                    <h6 class="alert alert-primary">Incorpore un plan de contingencia, considerando para ello escenarios desfavorables y posibles riesgos en la ejecución del proyecto (máximo 5.000 caracteres) </h6>
                    <textarea rows="7" name="plan_contingencia" cols="123" maxlength="10000" placeholder="Máximo 5.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                    
                    <h4>4.14 Función de Cada Integrante del Proyecto y Horas de Dedicación</h4>
                    <h6 class="alert alert-primary">La subida del documento "Integrantes" se ubica en el <b>ítem final</b>: "Anexos y Documentación para Adjuntar"</h6>
                    
                    <h4>4.15 Bibliografía Referencial</h4>
                    <textarea rows="7" name="bibliografia_referencial" cols="123" maxlength="10000" placeholder="Máximo 5.000 caracteres" class="form-control" style=" resize:none;" required=""></textarea><br>
                 
                  <!-- ITEM 4 --> <br>

                  
                  <h4 class="ctitulo2 rounded-lg">5 - Anexos y Documentación para Adjuntar</h4>
                  <h6 class="alert alert-danger col-lg-4"><b>Tamaño Máximo de Archivos: 20MB</b></h6>
                  <table style="height: 143px; width: 100%;">
        <tbody>
        <tr>
          <td style="background-color: #b9c2cb;" colspan="2"><span style="font-size: 14pt;">Documentación Bases y Anexos&nbsp;&nbsp;</span></td>
          <td style="background-color: #b9c2cb;" colspan="2"><span style="font-size: 14pt;">Subir Archivo</span></td>
        </tr>
        <tr>
          <td class="archivo1" width="80%">Bases del Concurso</td>
          <td class="archivo1" width="10%"><a href="https://www.dellibertador.cl/diplan/2019/fic/res_exe_0615_aprueba_bases_fic.pdf" target="_blank">Descargar </a></td>
          <td class="archivo1"></td>
        </tr>
        <tr>
          <td class="archivo1">Anexo 2 - Carta de Declaración de Responsabilidad</td>
          <td class="archivo1"><a href="src/anexos/anexo_2.docx" target="_blank">Descargar</a></td>
          <td class="archivo1"><input required="" type="file" name="archivo1" id="archivo1"></td>
        </tr>
        <tr>
          <td class="archivo1">Anexo 3 - Formatos de Cartas</td>
          <td class="archivo1"><a href="src/anexos/anexo_3.docx" target="_blank">Descargar</a></td>
          <td class="archivo1"><input required="" type="file" name="archivo2" id="archivo2" multiple="multiple"></td>
        </tr>
        <tr>
          <td class="archivo1"><u>Opcional</u> - Gráfico e Imágen</td>
          <td class="archivo1"></td>
          <td class="archivo1"><input  type="file" name="archivo3" id="archivo3" multiple="multiple"></td>
        </tr>
        <tr>
          <td class="archivo1">Anexo 6 - Formato de Carta Compromiso Costos de Operación Post Proyecto</td>
          <td class="archivo1"><a href="src/anexos/anexo_6.docx" target="_blank">Descargar</a></td>
          <td class="archivo1"><input required="" type="file" name="archivo5" id="archivo5"></td>
        </tr>
        <tr>
          <td class="archivo1">Presupuesto detallado del proyecto</td>
          <td class="archivo1"><a href="src/anexos/presupuesto.xlsx" target="_blank">Descargar</a></td>
          <td class="archivo1"><input required="" type="file" name="archivo6" id="archivo6"></td>
        </tr>
        <tr>
          <td class="archivo1">Función de cada integrante del proyecto y horas dedicadas</td>
          <td class="archivo1"><a href="src/anexos/integrantes.xlsx" target="_blank">Descargar</a></td>
          <td class="archivo1"><input required="" type="file" name="archivo10" id="archivo10"></td>
        </tr>
        <tr>
          <td class="archivo1">Copia simple del Rol Único Tributario de la Entidad postulante</td>
          <td class="archivo1"></td>
          <td class="archivo1"><input required="" type="file" name="archivo11" id="archivo11"></td>
        </tr>
        <tr>
          <td class="archivo1">Copia simple de la Cédula de Identidad del representante legal o mandatario</td>
          <td class="archivo1"></td>
          <td class="archivo1"><input required="" type="file" name="archivo12" id="archivo12"></td>
        </tr>
        <tr>
          <td class="archivo1">Copia simple del instrumento que nombra al representante legal o mandatario y del que lo faculta para firmar</td>
          <td class="archivo1"></td>
          <td class="archivo1"><input required="" type="file" name="archivo13" id="archivo13"></td>
        </tr>
        <tr>
          <td class="archivo1"><u>Opcional</u> - Carta de la autoridad sectorial o territorial (SEREMIs, Directores Regionales de Servicios Públicos y/o Municipios) que indica que la iniciativa es pertinente con las políticas o planes sectoriales o comunales</td>
          <td class="archivo1"></td>
          <td class="archivo1"><input type="file"  name="archivo14" id="archivo14"></td>
        </tr>
        <tr>
          <td class="archivo1"><u>Opcional</u> - Incorporar adicionalmente antecedentes relevantes de la iniciativa, que sea necesario agregar para su evaluación y análisis. <b>No agregar: CV completo</b></td>
          <td class="archivo1"></td>
          <td class="archivo1"><input type="file"  name="archivo15" id="archivo15"></td>
        </tr>
        </tbody>
        </table> <br><br><br><br><br>
<div align="center">
<input name="btnagregar" type="submit" class="btn btn-primary mb-4" value="Enviar"></div>
  </div>

  <table width="100%" border="0" bgcolor="#006CB7">
  <tbody><tr bgcolor="#006CB7">
    <td width="10%"><img src="src/logoblanco.png" width="150" height="150"></td>
    <td class="footer ctitulo" width="87%" bgcolor="#006CB7">&nbsp;Gobierno Regional de O'Higgins<br>
      <ul>
        <li class="ctitulo">Plaza de Los Héroes s/n</li>
        <li class="ctitulo">Rancagua</li>
        <li class="ctitulo">Fono: 72 220 5900</li>
        <li class="ctitulo">Fax :&nbsp;&nbsp;72 223 7148</li>
    </ul></td>
    <td width="3%">&nbsp;</td>
  </tr>
</tbody></table>


</div>
        </form>
        <?php 

if(isset($_POST['Enviar']))
{
  include 'php/submit.php';

  echo "WORK!";
} 
?>      

</div>


  </body>

  </html>