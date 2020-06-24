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
    <link rel="icon" type="image/jpg" href="src/logoblanco.jpg">
    <script type="text/javascript" src="../js/main.js"></script>
    <title>PRESUPUESTO</title>
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

    <div class="container-fluid">
    
    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border border-dark">GASTOS</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">ACTIVIDADES</div>
    <div class="col-md-2 border border-dark">MONTO SOLICITADO AL FIC (M$) </div>
    <div class="col-md-2 border border-dark">APORTE PECUNIARIO(M$)</div>
    <div class="col-md-2 border border-dark">APORTE NO PECUNIARIO (M$)</div>
    <div class="col-md-2 border border-dark">MONTO TOTAL PROYECTO (M$)</div>
    </div>

    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 "></div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Actividades de Investigación y Desarrollo</div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>

    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 "></div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Actividades de Fomento a la Adopción de la Innovación</div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>

    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 "><b>Gastos de Contratación del Proyecto</b></div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Actividades de Desarrollo y Transferencia de Tecnologías</div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>

    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark"></div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Otras Actividades que guarden estricta relación con los objetivos y los resultados comprometidos de la innovación propuesta</div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-3 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>



    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark">15.2 Difusión (10%)</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Detallar</div>
    <div align="center" class=" col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class=" col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class=" col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class=" col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>


    <div class="row container">
    <div align="center"  class="pt-2 col-md-2">15.3 Gastos de Administración (5%)</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Materiales de Oficina</div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>
    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark"></div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Equipo Administrativo profesionales o técnicos </div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>


    


    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark">15.4 Adquisición de Máquinas, Equipos e Insumos</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Detallar</div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>


    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark">15.5 Mobiliario</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Detallar</div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>



    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark">15.6 Infraestructura (10%)</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Detallar</div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$ddddddddddddddd" onKeyPress="return soloNumeros(event)"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>


    <div class="row container">
    <div align="center"  class="pt-2 col-md-2 border-bottom border-dark">TOTALES PROYECTO</div>
    <div align="center"  class="pt-2 col-md-2 border border-dark">Detallar</div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$"></div>
    <div align="center" class="pt-2 col-md-2 border border-dark"><input type="text" class="form-control" placeholder="M$" readonly></div>
    </div>
    
    </div>
</body>
</html>










