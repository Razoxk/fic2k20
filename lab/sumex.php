<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <script>
//Función que realiza la suma
function Suma() {
   var ingreso1 = document.calculadora.ingreso1.value;
   var ingreso2 = document.calculadora.ingreso2.value;
   var ingreso3 = document.calculadora.ingreso3.value;
   var ingreso4 = document.calculadora.ingreso4.value;
   var ingreso5 = document.calculadora.ingreso5.value;
   var ingreso6 = document.calculadora.ingreso6.value;
   var ingreso7 = document.calculadora.ingreso7.value;
   var ingreso8 = document.calculadora.ingreso8.value;
   var ingreso9 = document.calculadora.ingreso9.value;
   var ingreso10 = document.calculadora.ingreso10.value;
   try{
      //Calculamos el número escrito:
       ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
       ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
       ingreso3 = (isNaN(parseInt(ingreso3)))? 0 : parseInt(ingreso3);
       ingreso4 = (isNaN(parseInt(ingreso4)))? 0 : parseInt(ingreso4);
       ingreso5 = (isNaN(parseInt(ingreso5)))? 0 : parseInt(ingreso5);
       ingreso6 = (isNaN(parseInt(ingreso6)))? 0 : parseInt(ingreso6);
       ingreso7 = (isNaN(parseInt(ingreso7)))? 0 : parseInt(ingreso7);
       ingreso8 = (isNaN(parseInt(ingreso8)))? 0 : parseInt(ingreso8);
       ingreso9 = (isNaN(parseInt(ingreso9)))? 0 : parseInt(ingreso9);
       ingreso10 = (isNaN(parseInt(ingreso10)))? 0 : parseInt(ingreso10);
       document.calculadora.resultado.value = ingreso1+ingreso2+ingreso3+ingreso4+ingreso5+ingreso6+ingreso7+ingreso8+ingreso9+ingreso10;

        if(document.calculadora.resultado.value>240000000){
            alert('te pasaste carnal');
            document.calculadora.resultado.value = "0";
            document.calculadora.ingreso1.value = "";
            document.getElementById("ingreso1").focus();
            document.calculadora.ingreso2.value = "";
            document.calculadora.ingreso3.value = "";
            document.calculadora.ingreso4.value = "";
            document.calculadora.ingreso5.value = "";
            document.calculadora.ingreso6.value = "";
            document.calculadora.ingreso7.value = "";
            document.calculadora.ingreso8.value = "";
            document.calculadora.ingreso9.value = "";
            document.calculadora.ingreso10.value = "";

        }

   }

   //Si se produce un error no hacemos nada
   catch(e) {}
}

function test(){

    var porcentaje5 = (document.calculadora.resultado.value * 5) / 100;
    var porcentaje10 = (document.calculadora.resultado.value * 10) / 100;

    if (document.calculadora.ingreso6.value >= porcentaje5) {
        
        if (document.calculadora.ingreso5.value>=document.calculadora.porcentaje10.value ) {
            alert('ta bien');
        }
        else{
            alert('ta mal el 10%');
        }

    }
    else{
        alert('ta mal el 5%');
    }

}


function soloNumeros(e){

var key = window.Event ? e.which : e.keyCode

return (key >= 48 && key <= 57)

}



</script>



<div class="container">
<form name=calculadora>
<table class="table table-bordered" name="calculadora">
    <tr>
        <td>Gastos</td>
        <td>Actividades</td>
        <td>MONTO SOLICITADO AL FIC (M$) </td>
        <td>APORTE PECUNIARIO(M$)</td>
        <td>APORTE NO PECUNIARIO (M$)</td>
        <td>MONTO TOTAL PROYECTO (M$)</td>
    </tr>
    <tr>
        <td rowspan="4" class="align-items-center">Gastos de Contratación del Proyecto</td>
        <td><input type="text"name="ingreso1" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td><input type="text"name="ingreso2" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td><input type="text"name="ingreso3" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td><input type="text"name="ingreso4" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td>15.2 Difusión (10%)</td>
        <td><input type="text"name="ingreso5" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td rowspan="2">15.3 Gastos de Administración (5%)</td>
        <td><input type="text"name="ingreso6" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td><input type="text"name="ingreso7" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td>15.4 Adquisición de Máquinas, Equipos e Insumos</td>
        <td><input type="text"name="ingreso8" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td>15.5 Mobiliario</td>
        <td><input type="text"name="ingreso9" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td>15.6 Infraestructura (10%)</td>
        <td><input type="text"name="ingreso10" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()" onblur="test()" ></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>
    <tr>
        <td>TOTALES PROYECTO</td>
        <td><input type="text" name="resultado" id="resultado" disabled></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
        <td><input type="text"name="" onKeyPress="return soloNumeros(event)" onKeyUp="Suma()"></td>
    </tr>

</table>
</form>
</div>
</body>
</html>