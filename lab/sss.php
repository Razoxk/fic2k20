<script> //valida solo numeros
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function sacarapostrofe(myfield, e)
        {
            var key;
            var keychar;

            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;

            keychar = String.fromCharCode(key);

            // control keys
            if ((keychar == "'"))
                return false;
        }
</script>

<script language=Javascript> //valida solo telefono y celular
function validaFono(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
			
	         return true;
}
</script>

<script type="text/javascript">
function minmax(value, min, max) 
{
    if(parseInt(value) < min) 
        return 1; 
    else if(parseInt(value) > max) 
        return 36; 
    else return value;
}

function llamarvalorpresu(){ 
	var maxFIC = 230000000;
	var valorFIC = null;
	var x = $("#proy_presu").val();
	valorFIC = parseInt(x);
		
	if(valorFIC > maxFIC){		
	alert("El monto solicitado no puede ser mayor que: $240.000.000");
	$('#proy_presu').val('');
		}		
}
</script>


  
<form id="formulario" name="formulario"  method="POST" enctype="multipart/form-data" onsubmit="return Comprobar()">

      <script>

function Suma() {
       var ingreso1 = document.formulario.ingreso1.value;
       var ingreso2 = document.formulario.ingreso2.value;
       var ingreso3 = document.formulario.ingreso3.value;
       var ingreso4 = document.formulario.ingreso4.value;
       var ingreso5 = document.formulario.ingreso5.value;
       var ingreso6 = document.formulario.ingreso6.value;
       var ingreso7 = document.formulario.ingreso7.value;
       var ingreso8 = document.formulario.ingreso8.value;
       var ingreso9 = document.formulario.ingreso9.value;
       var ingreso10 = document.formulario.ingreso10.value;
       var total =document.formulario.proy_total.value;

       var ingreso11 = document.formulario.ingreso11.value;
       var ingreso12 = document.formulario.ingreso12.value;
       var ingreso13 = document.formulario.ingreso13.value;
       var ingreso14 = document.formulario.ingreso14.value;
       var ingreso15 = document.formulario.ingreso15.value;
       var ingreso16 = document.formulario.ingreso16.value;
       var ingreso17 = document.formulario.ingreso17.value;
       var ingreso18 = document.formulario.ingreso18.value;
       var ingreso19 = document.formulario.ingreso19.value;
       var ingreso110 = document.formulario.ingreso110.value;
       var total1 =document.formulario.proy_total1.value;

       var ingreso21 = document.formulario.ingreso21.value;
       var ingreso22 = document.formulario.ingreso22.value;
       var ingreso23 = document.formulario.ingreso23.value;
       var ingreso24 = document.formulario.ingreso24.value;
       var ingreso25 = document.formulario.ingreso25.value;
       var ingreso26 = document.formulario.ingreso26.value;
       var ingreso27 = document.formulario.ingreso27.value;
       var ingreso28 = document.formulario.ingreso28.value;
       var ingreso29 = document.formulario.ingreso29.value;
       var ingreso210 = document.formulario.ingreso210.value;
       var total2 =document.formulario.proy_total2.value;

       var ingreso31 = document.formulario.ingreso31.value;
       var ingreso32 = document.formulario.ingreso32.value;
       var ingreso33 = document.formulario.ingreso33.value;
       var ingreso34 = document.formulario.ingreso34.value;
       var ingreso35 = document.formulario.ingreso35.value;
       var ingreso36 = document.formulario.ingreso36.value;
       var ingreso37 = document.formulario.ingreso37.value;
       var ingreso38 = document.formulario.ingreso38.value;
       var ingreso39 = document.formulario.ingreso39.value;
       var ingreso310 = document.formulario.ingreso310.value;
       var total3 =document.formulario.proy_total3.value;

       try{
         
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

           ingreso11 = (isNaN(parseInt(ingreso11)))? 0 : parseInt(ingreso11);
           ingreso12 = (isNaN(parseInt(ingreso12)))? 0 : parseInt(ingreso12);
           ingreso13 = (isNaN(parseInt(ingreso13)))? 0 : parseInt(ingreso13);
           ingreso14 = (isNaN(parseInt(ingreso14)))? 0 : parseInt(ingreso14);
           ingreso15 = (isNaN(parseInt(ingreso15)))? 0 : parseInt(ingreso15);
           ingreso16 = (isNaN(parseInt(ingreso16)))? 0 : parseInt(ingreso16);
           ingreso17 = (isNaN(parseInt(ingreso17)))? 0 : parseInt(ingreso17);
           ingreso18 = (isNaN(parseInt(ingreso18)))? 0 : parseInt(ingreso18);
           ingreso19 = (isNaN(parseInt(ingreso19)))? 0 : parseInt(ingreso19);
           ingreso110 = (isNaN(parseInt(ingreso110)))? 0 : parseInt(ingreso110);

           ingreso21 = (isNaN(parseInt(ingreso21)))? 0 : parseInt(ingreso21);
           ingreso22 = (isNaN(parseInt(ingreso22)))? 0 : parseInt(ingreso22);
           ingreso23 = (isNaN(parseInt(ingreso23)))? 0 : parseInt(ingreso23);
           ingreso24 = (isNaN(parseInt(ingreso24)))? 0 : parseInt(ingreso24);
           ingreso25 = (isNaN(parseInt(ingreso25)))? 0 : parseInt(ingreso25);
           ingreso26 = (isNaN(parseInt(ingreso26)))? 0 : parseInt(ingreso26);
           ingreso27 = (isNaN(parseInt(ingreso27)))? 0 : parseInt(ingreso27);
           ingreso28 = (isNaN(parseInt(ingreso28)))? 0 : parseInt(ingreso28);
           ingreso29 = (isNaN(parseInt(ingreso29)))? 0 : parseInt(ingreso29);
           ingreso210 = (isNaN(parseInt(ingreso210)))? 0 : parseInt(ingreso210);

           ingreso31 = (isNaN(parseInt(ingreso31)))? 0 : parseInt(ingreso31);
           ingreso32 = (isNaN(parseInt(ingreso32)))? 0 : parseInt(ingreso32);
           ingreso33 = (isNaN(parseInt(ingreso33)))? 0 : parseInt(ingreso33);
           ingreso34 = (isNaN(parseInt(ingreso34)))? 0 : parseInt(ingreso34);
           ingreso35 = (isNaN(parseInt(ingreso35)))? 0 : parseInt(ingreso35);
           ingreso36 = (isNaN(parseInt(ingreso36)))? 0 : parseInt(ingreso36);
           ingreso37 = (isNaN(parseInt(ingreso37)))? 0 : parseInt(ingreso37);
           ingreso38 = (isNaN(parseInt(ingreso38)))? 0 : parseInt(ingreso38);
           ingreso39 = (isNaN(parseInt(ingreso39)))? 0 : parseInt(ingreso39);
           ingreso310 = (isNaN(parseInt(ingreso310)))? 0 : parseInt(ingreso310);
       }catch(e){}

          //Calculamos el número escroto:
       

           c=parseInt(ingreso1)+parseInt(ingreso2)+parseInt(ingreso3)+parseInt(ingreso4)+parseInt(ingreso5)+parseInt(ingreso6)+parseInt(ingreso7)+parseInt(ingreso8)+parseInt(ingreso9)+parseInt(ingreso10);
           document.formulario.proy_total.value=c;

           d=parseInt(ingreso11)+parseInt(ingreso12)+parseInt(ingreso13)+parseInt(ingreso14)+parseInt(ingreso15)+parseInt(ingreso16)+parseInt(ingreso17)+parseInt(ingreso18)+parseInt(ingreso19)+parseInt(ingreso110);              
           document.formulario.proy_total1.value=d;
          

           e=parseInt(ingreso21)+parseInt(ingreso22)+parseInt(ingreso23)+parseInt(ingreso24)+parseInt(ingreso25)+parseInt(ingreso26)+parseInt(ingreso27)+parseInt(ingreso28)+parseInt(ingreso29)+parseInt(ingreso210);               
           document.formulario.proy_total2.value=e;

           f=parseInt(ingreso1)+parseInt(ingreso2)+parseInt(ingreso3)+parseInt(ingreso4)+parseInt(ingreso5)+parseInt(ingreso6)+parseInt(ingreso7)+parseInt(ingreso8)+parseInt(ingreso9)+parseInt(ingreso10)+parseInt(ingreso11)+parseInt(ingreso12)+parseInt(ingreso13)+parseInt(ingreso14)+parseInt(ingreso15)+parseInt(ingreso16)+parseInt(ingreso17)+parseInt(ingreso18)+parseInt(ingreso19)+parseInt(ingreso110)+parseInt(ingreso21)+parseInt(ingreso22)+parseInt(ingreso23)+parseInt(ingreso24)+parseInt(ingreso25)+parseInt(ingreso26)+parseInt(ingreso27)+parseInt(ingreso28)+parseInt(ingreso29)+parseInt(ingreso210);
           document.formulario.proy_total3.value=f;

           g=parseInt(ingreso1)+parseInt(ingreso11)+parseInt(ingreso21);
           document.formulario.ingreso31.value=g;

           h=parseInt(ingreso2)+parseInt(ingreso12)+parseInt(ingreso22);
           document.formulario.ingreso32.value=h;

           i=parseInt(ingreso3)+parseInt(ingreso13)+parseInt(ingreso23);
           document.formulario.ingreso33.value=i;

           j=parseInt(ingreso4)+parseInt(ingreso14)+parseInt(ingreso24);
           document.formulario.ingreso34.value=j;

           k=parseInt(ingreso5)+parseInt(ingreso15)+parseInt(ingreso25);
           document.formulario.ingreso35.value=k;

           l=parseInt(ingreso6)+parseInt(ingreso16)+parseInt(ingreso26);
           document.formulario.ingreso36.value=l;

           m=parseInt(ingreso7)+parseInt(ingreso17)+parseInt(ingreso27);
           document.formulario.ingreso37.value=m;

           m=parseInt(ingreso8)+parseInt(ingreso18)+parseInt(ingreso28);
           document.formulario.ingreso38.value=m;

           m=parseInt(ingreso9)+parseInt(ingreso19)+parseInt(ingreso29);
           document.formulario.ingreso39.value=m;

           m=parseInt(ingreso10)+parseInt(ingreso110)+parseInt(ingreso210);
           document.formulario.ingreso310.value=m;
       

       if (c>200000000){
    alert("La suma de los campos en 'Monto Solicitado al FIC' no puede exceder los $200.000.000");
    document.formulario.proy_total.value = "0";
    document.formulario.ingreso1.value = "";
    document.getElementById("ingreso1").focus();
    document.formulario.ingreso2.value = "";
    document.formulario.ingreso3.value = "";
    document.formulario.ingreso4.value = "";
    document.formulario.ingreso5.value = "";
    document.formulario.ingreso6.value = "";
    document.formulario.ingreso7.value = "";
    document.formulario.ingreso8.value = "";
    document.formulario.ingreso9.value = "";
    document.formulario.ingreso10.value = "";
  }
    }


    function Calculo() {
       var ingreso1 = document.formulario.ingreso1.value;
       var ingreso2 = document.formulario.ingreso2.value;
       var ingreso3 = document.formulario.ingreso3.value;
       var ingreso4 = document.formulario.ingreso4.value;
       var ingreso5 = document.formulario.ingreso5.value;
       var ingreso6 = document.formulario.ingreso6.value;
       var ingreso7 = document.formulario.ingreso7.value;
       var ingreso8 = document.formulario.ingreso8.value;
       var ingreso9 = document.formulario.ingreso9.value;
       var ingreso10 = document.formulario.ingreso10.value;
       var total = document.formulario.proy_total.value;
       var ingreso6 = Math.round(ingreso6);
       var ingreso7 = Math.round(ingreso7);
       var infra = ingreso6 + ingreso7;
      try{

       ingresoDifu = Math.round(parseInt(total)*0.1);
       ingresoGasto = Math.round(parseInt(total)*0.05);
       ingresoInfra = Math.round(parseInt(total)*0.1);
      }catch(e){}

       if (ingresoDifu < ingreso5){
      alert("Error. El valor del ítem 'Difusión (10%)' es mayor al tope máximo. Ingrese los datos nuevamente.");
      document.formulario.ingreso5.value = "";
      document.getElementById("ingreso5").focus();
      document.formulario.proy_total.value = "";
  }else if (ingresoGasto < infra){
      alert("Error. El valor del ítem 'Gastos de Administración (5%)' es mayor al tope máximo. Ingrese los datos nuevamente.");
      document.formulario.ingreso6.value = "";
      document.formulario.ingreso7.value = "";
      document.getElementById("ingreso6").focus();
      document.formulario.proy_total.value = "";
  }else if (ingresoInfra < ingreso10){
      alert("Error. El valor del ítem 'Infraestructura (10%)' es mayor al tope máximo. Ingrese los datos nuevamente.");
      document.formulario.ingreso10.value = "";
      document.getElementById("ingreso10").focus();
      document.formulario.proy_total.value = "";
  }
    }
    function Pecunario() {
       var total1 = document.formulario.proy_total1.value;
       var total2 = document.formulario.proy_total2.value;
       var total3 = document.formulario.proy_total3.value;

      try{
        ingresoPecunario = Math.round(parseInt(total3)*0.05);
        ingresoNoPecunario = Math.round(parseInt(total3)*0.05);
      }catch(e){}

      if(ingresoPecunario > total1){
        alert("Error. El valor total del 'Aporte Pecuniario' debe ser mayor o igual al 5% del Monto Total del Proyecto. Ingrese los datos nuevamente.");
        document.formulario.ingreso11.value = "";
        document.formulario.ingreso12.value = "";
        document.formulario.ingreso13.value = "";
        document.formulario.ingreso14.value = "";
        document.formulario.ingreso15.value = "";
        document.formulario.ingreso16.value = "";
        document.formulario.ingreso17.value = "";
        document.formulario.ingreso18.value = "";
        document.formulario.ingreso19.value = "";
        document.formulario.ingreso110.value = "";
        document.getElementById("ingreso11").focus();
        document.formulario.proy_total1.value = "";
      }else if (ingresoNoPecunario > total2){
        alert("Error. El valor total del 'Aporte No Pecuniario' debe ser mayor o igual al 5% del Monto Total del Proyecto. Ingrese los datos nuevamente.");
        document.formulario.ingreso21.value = "";
        document.formulario.ingreso22.value = "";
        document.formulario.ingreso23.value = "";
        document.formulario.ingreso24.value = "";
        document.formulario.ingreso25.value = "";
        document.formulario.ingreso26.value = "";
        document.formulario.ingreso27.value = "";
        document.formulario.ingreso28.value = "";
        document.formulario.ingreso29.value = "";
        document.formulario.ingreso210.value = "";
        document.getElementById("ingreso21").focus();
        document.formulario.proy_total2.value = "";
      }
    }

    </script>

      <p></p>
      <h3>2.4 Presupuesto</h3>
      <p>Ingrese el monto a financiar por el FIC para cada subítem (no puede superar los $200.000.000).</p>
      
      <table class="table table-bordered" border="1px solid black">
<tr>
    <th>GASTOS</th>
    <th>ACTIVIDADES</th>
    <th>MONTO SOLICITADO AL FIC (M$)</th>
    <th>APORTE PECUNIARIO(M$)</th>
    <th>APORTE NO PECUNIARIO (M$)</th>
    <th>MONTO TOTAL PROYECTO (M$)</th>
</tr>
<tr>
   <td class="verticalTableHeade r" rowspan="4" align="center"><b>Gastos de Contratación del Proyecto</b></td>
   <td class="tg-hix7">Actividades de Investigación y Desarrollo</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso1" id="ingreso1" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso11" id="ingreso11" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso21" id="ingreso21" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso31" id="ingreso31" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
</tr>
<tr>
   <td class="tg-hix7">Actividades de Fomento a la Adopción de la Innovación</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso2" id="ingreso2" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso12" id="ingreso12" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso22" id="ingreso22" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso32" id="ingreso32" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
</tr>
<tr>
   <td class="tg-hix7">Actividades de Desarrollo y Transferencia de Tecnologías</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso3" id="ingreso3" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso13" id="ingreso13" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso23" id="ingreso23" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso33" id="ingreso33" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
 </tr>
 <tr>
   <td class="tg-hix7">Otras Actividades que guarden estricta relación con los objetivos y los resultados comprometidos de la innovación propuesta</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso4" id="ingreso4" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso14" id="ingreso14" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso24" id="ingreso24" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso34" id="ingreso34" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
 </tr>
 <tr>
   <td class="tg-hix7" colspan="2" align="center"><b>Difusión (10%)</b></td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso5" id="ingreso5" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso15" id="ingreso15" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso25" id="ingreso25" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso35" id="ingreso35" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
 </tr>
  <tr>
  <td class="verticalTableHeade r" rowspan="2" align="center"><b>Gastos de Administración (5%)</b></td>
   <td class="tg-hix7">Materiales de Oficina</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso6" id="ingreso6" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso16" id="ingreso16" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso26" id="ingreso26" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso36" id="ingreso36" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
 </tr>

<tr>
<td class="tg-hix7">Equipo Administrativo profesionales o técnicos</td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso7" id="ingreso7" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso17" id="ingreso17" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso27" id="ingreso27" onkeyup="return Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso37" id="ingreso37" readonly="readonly" style="background-color:#B2B2B2" onkeypress="return valida(event)" onpaste="return false" required></th>
</tr>

<tr>
   <td class="tg-hix7" colspan="2" align="center"><b>Adquisición de Máquinas, Equipos e Insumos</b></td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso8" id="ingreso8" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso18" id="ingreso18" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso28" id="ingreso28" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso38" id="ingreso38" readonly="readonly" style="background-color:#B2B2B2" onpaste="return false" required></th>
</tr>

<tr>
   <td class="tg-hix7" colspan="2" align="center"><b>Mobiliario</b></td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso9" id="ingreso9" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso19" id="ingreso19" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso29" id="ingreso29" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso39" id="ingreso39" readonly="readonly" style="background-color:#B2B2B2" onpaste="return false" required></th>
</tr>

<tr>
   <td class="tg-hix7" colspan="2" align="center"><b>Infraestructura (10%)</b></td>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso10" id="ingreso10" onkeyup="Suma()" onblur="Calculo()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso110" id="ingreso110" onkeyup="Suma()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="text" maxlength="9" name="ingreso210" id="ingreso210" onkeyup="Suma()" onblur="Pecunario()" onkeypress="return valida(event)" onpaste="return false" required></th>
   <th class="tg-hix7"><input type="number" maxlength="9" name="ingreso310" id="ingreso310" readonly="readonly" style="background-color:#B2B2B2" onpaste="return false" required></th>
</tr>

<tr>
<td align="right" colspan="2" > <b>TOTALES PROYECTO</b></td>
<th><input maxlength="9" type="number" name="proy_total" id="proy_total" readonly="readonly" style="background-color:#B2B2B2" required/></th>
<th><input maxlength="9" type="number" name="proy_total1" id="proy_total1" readonly="readonly" onpaste="return false" style="background-color:#B2B2B2" required/></th>
<th><input maxlength="9" type="number" name="proy_total2" id="proy_total2" readonly="readonly" onpaste="return false" style="background-color:#B2B2B2" required/></th>
<th><input maxlength="9" type="number" name="proy_total3" id="proy_total3" readonly="readonly" onpaste="return false" style="background-color:#B2B2B2" required/></th>
</tr>
</table>

<br>
      <p>&nbsp;</p>
    </div>
  </div>
  <br>
  </div>
  </div>