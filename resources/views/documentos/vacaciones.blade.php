<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Corpoturismo - Carta Solicitud de vacaciones </title>
	<style type="text/css" media="screen">
		.logoGob{
		 	width: 120px;
		 	height: 80px;
		 	float:left; 
		}
		.logoCP{
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
	<div class="">
		<img src="img/logo2.png" class="logoGob">									
		<img src="img/logo.png" class="logoCP">
		<p class="membrete"><b>	
			CORPORACIÓN DE TURISMO DEL ESTADO MONAGAS<br>
			G-20004693-7<br> 
			Antg. Calle Bermúdez, edif. Redbim piso 1 ofic. 1<br>
			Telf.: 0291-6440657 / E-mail: cormotur.rrhh@gmail.com<br>
			Maturín, Estado Monagas - Venezuela<br></b>
		</p>
		<br><br><br><br>
		<div class="tituloDoc"><b>VACACIONES</b></div>
		Fecha: {{ $solicitud->created_at->day}}  de {{$solicitud->created_at->monthName}} del {{$solicitud->created_at->year }}.
		<br>
		<p style="text-align: justify-all;">
		NOMBRES Y APELLIDOS DEL TRABAJADOR: {{ $solicitud->usuario->persona->nombres }} {{ $solicitud->usuario->persona->apellidos }}<br>
		C.I: {{ $solicitud->usuario->persona->cedula }}.      
		CARGO: {{ $solicitud->usuario->rol->dsc}}<br>
		GERENCIA DE RR.HH.<br>
		PERIODO CORRESPONDIENTE: {{$solicitud->periodo}}<br>
		TIEMPO DE VACACIONES: ______ DIAS HÁBILES<br>
		FECHA DE INICIO: {{ date("d/m/Y", strtotime($solicitud->fecha_inicio)) }}<br> 
		APROBADO: <u>{{ ($solicitud->estatus->dsc == 'Aprobado') ? 'X' : '__' }}</u>
		NEGADO: 	<u>{{ ($solicitud->estatus->dsc == 'Negado') ? 'X' : '__' }}</u> 
		FECHA DE APROBADO: {{ date("d/m/Y", strtotime($solicitud->fecha_aprobado)) }}</p><br><br><br><br><br><br>	
     	<p align="center">
     	________________________<br>
     	JEFE INMEDIATO <br>  
     	FIRMA<br>	
     	</p>
     	
     	OBSERVACIONES: {{$solicitud->razon}}<br>
	</div>
</body>
</html>