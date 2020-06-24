<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            Su proyecto se ha ingresado correctamente, puede descargar su comprobante <a href="<?php echo $_SESSION["comprobante"]; ?>" class="alert-link">Aquí</a>. El proyecto sera revisado por el personal encargado.
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