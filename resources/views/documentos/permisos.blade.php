<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Corpoturismo - Solicitud de permisos </title>
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
		<div class="tituloDoc"><b>Solicitud de permisos</b></div>
		<b>Fecha:</b> 
		{{ $solicitud->created_at->day}} / {{$solicitud->created_at->monthName}} / 
		{{$solicitud->created_at->year }}<br><br>
		
		<b>Datos personales</b><br><br>
		<table border="1">
			<tr>
				<td width="230px">Apellidos: {{ $solicitud->usuario->persona->apellidos }}</td>
				<td width="230px">Nombres: {{ $solicitud->usuario->persona->nombres }} </td>
				<td width="230px">C.I.  {{ $solicitud->usuario->persona->cedula }}</td>
			</tr>
			<tr>
				<td colspan="3">Cargo que desempeña: {{ $solicitud->usuario->rol->dsc}}</td>
			</tr>
			<tr>
				<td colspan="3">Ubicación administrativa: </td>
			</tr>
		</table><br>     
			
		<b>Tipo de permiso</b><br><br>
		 {{ $solicitud->documento->dsc }}<br><br>
		<!-- <table border="1">
			<tr>
				<td>Obligatorios</td>
				<td>Postestativo</td>
				<td>No remunerados</td>
			</tr>
			<tr>
				<td>
					Vacaciones <br>
					Matrimonio <br>
					Fallecimiento familiar <br>
					Consultas medicas <br>
					Examenes medicos <br>
					Comparecencia ante la autoridad <br>
					Licencia de paternidad	 <br>		      
					Prenatal <br>
					Postnatal <br>
					Permiso Lactancia <br>
				</td>
				<td>
					Asistencia a seminarios, conferencias o congresos <br>
					Beca <br>
					Enfermedad de familiar <br>
					Accidente de familiar <br>
					Diligencias personales <br>
					Actividades deportivas <br>
					Asistencia a cursos	 <br>		
				</td>
				<td>No remunerados</td>
			</tr>
			<tr>
				<td>Anexos</td>
				<td>Observación: {{ $solicitud->razon}} </td>
				<td>No remunerados</td>
			</tr>		
		</table><br> -->

		<b>Periodo de duración del permiso</b><br><br>
		<table border="1">
			<tr>
				<td colspan="3" width="230px"><center>Desde </center></td>
				<td colspan="3" width="230px"><center>Hasta </center></td>
				<td colspan="3" width="230px"><center>Total </center></td>
			</tr>
			<tr>
				<td><center>Día 	<br>{{ date("d", strtotime($solicitud->fecha_inicio)) }}</center></td>
				<td><center>Mes 	<br>{{ date("m", strtotime($solicitud->fecha_inicio)) }}</center></td>
				<td><center>Año 	<br>{{ date("Y", strtotime($solicitud->fecha_inicio)) }}</center></td>
				<td><center>Día 	<br>{{ date("d", strtotime($solicitud->fecha_final)) }}</center></td>
				<td><center>Mes 	<br>{{ date("m", strtotime($solicitud->fecha_final)) }}</center></td>
				<td><center>Año 	<br>{{ date("Y", strtotime($solicitud->fecha_final)) }}</center></td>
				<td><center>Horas 	<br><br></center></td>
				<td><center>Días 	<br><br></center></td>
				<td><center>Meses 	<br><br></center></td>
			</tr>
		</table><br>
		
		<br><br><br><br><br><br><br><br><br><center><b>Aceptación</b><br>LCDO Juan J. Guerra<br>Gerente de administracion de Recursos Humanos<br> y Servicios Generales (E)
				</center>

	</div>
</body>
</html>