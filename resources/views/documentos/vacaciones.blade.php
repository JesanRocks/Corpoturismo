<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Corpoturismo - Carta Solicitud de vacaciones </title>
	<style type="text/css" media="screen">
		.logo1{
		 	width: 120px;
		 	height: 80px;
		 	float:left; 
		}
		.logo2{
		 	width: 120px;
		 	height: 80px;
		 	float:right; 
		}

		.container{
			margin:12px;
		}
		
		.membrete{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			font-family: Calibri, Arial, sans-serif;	
		 	text-align: center; 
		 	font-size: 14px; 
		 	color: #000000;
		}

		.tituloDoc{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			font-family: Calibri, Arial, sans-serif;
		 	text-align: center; 
		 	font-size: 28px; 
		 	color: black;
		 	margin-top: 25px;
		 	margin-bottom: 25px;
		}
		.page-break {
		    page-break-after: always;
		}

	</style>
</head>
<body>
	<div class="page-break">
		<img src="img/logo.png" class="logo1">										
		<img src="img/logo.png" class="logo2">
		<p class="membrete"><b>	
			CORPORACION DE TURISMO DEL ESTADO MONAGAS<br>
			G-20004693-7<br> 
			Antg. Calle Bermúdez, edif. Redbim piso 1 ofic. 1<br>
			Telf.: 0291-6440657 / E- mail: cormotur.rrhh@gmail.com<br>
			Maturín. Estado Monagas. Venezuela<br></b>
		</p>

		<div class="tituloDoc"><b>VACACIONES</b></div>

		Fecha:{{now()}}<br>
<p style="text-align: justify-all;">
NOMBRES Y APELLIDOS DEL TRABAJADOR: {{ $solicitud->usuario->persona->nombres }} {{ $solicitud->usuario->persona->apellidos }}<br>

C.I.  {{ $solicitud->usuario->persona->cedula }}      CARGO: {{ $solicitud->usuario->rol->dsc}}<br>

GERENCIA:_____________________________________________________________________________<br>

PERIODO CORRESPONDIENTE:  20____ - 20____<br>

TIEMPO DE VACACIONES: ______ DIAS HÁBILES<br>

FECHA DE INICIO:  ____/____/________ <br> 

APROBADO:{{ $solicitud->estatus->dsc}} NEGADO:{{ $solicitud->estatus->dsc}}  FECHA;____/____/______</p>		

________________________<br>
         JEFE INMEDIATO <br>  
        FIRMA<br>

OBSERVACIONES:{{ $solicitud->razon}}<br>

<div class="tituloDoc"><b>
APROBACION  RECURSOS HUMANOS<br>
DATOS DEL TRABAJADOR<br>
</b></div>
<p style="text-align: justify-all;">
NOMBRES Y APELLIDOS: {{ $solicitud->usuario->persona->nombres }} {{ $solicitud->usuario->persona->apellidos }}<br>

C.I. {{ $solicitud->usuario->persona->cedula }}      CARGO:{{ $solicitud->usuario->rol->dsc}}<br>

TIEMPO DE VACACIONES: ______ DIAS HÁBILES<br>

 DESDE: ____/____/________  HASTA: ____/____/________<br>

DEBE REINTEGRARSE A SUS LABORES EL DIA: ____/____/________<br>


APROBADO:_____  NEGADO_____FECHA;____/____/______<br>

OBSERVACIONES:<br></p>

___________________________				________________________<br>

     <b>FIRMA  AUTORIZADA				           TRABAJADOR<br>
 NOTA:</b> ESTA SOLICITUD DEBE IR SIN ENMIENDAS.<br>
	
		</p>

	</div>
</body>
</html>