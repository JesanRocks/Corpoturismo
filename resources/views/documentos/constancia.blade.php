<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Corpoturismo - Constancia de trabajo </title>
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
	<div>
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
		<table border="1">
			<tr>
				<td colspan="4" height="50px"><center>Constancia de trabajo</center></td>
			</tr>
			<tr>
				<td width="230px">Cuidadano(a):</td>
				<td colspan="3">{{ $solicitud->usuario->persona->nombres }}  {{ $solicitud->usuario->persona->apellidos }} </td>
			</tr>
			<tr>
				<td>Titular de la Cédula:</td>
				<td colspan="3">V-{{ $solicitud->usuario->persona->cedula }}</td>
			</tr>
			<tr>
				<td>Desempañando el cargo:</td>
				<td>{{ $solicitud->usuario->rol->dsc}}</td>
				<td>Bajo el codigo: </td>
				<td>{{ $solicitud->usuario->rol->dsc}}</td>
			</tr>
			<tr>
				<td>Adscrita(o) a la dependencia:</td>
				<td colspan="3">Gerencia de Naturaleza</td>
			</tr>
			<tr>
				<td colspan="4" align="justify">
					<br><br>Presta servicio en la Corporacion de turismo del Estado Monagas (Corpoturismo) como ACTIVO desde el 
					{{ date("d/m/Y", strtotime($solicitud->usuario->fecha_ingreso)) }} 
					hasta la presente fecha, devengando un sueldo mensual de Treinta y cinco mil novencientos sensenta y cuatro Bolivares con 00/100 (Bs. 
					{{$solicitud->usuario->salario}}
					).<br><br><br><br>
				</td>
			</tr>
		</table>	
		<br><br><br><br><br><br><br><br>
		<table>
			<tr>
				<td align="justify">
					Constancia que expide a solicitud de la parte interesada, en la cuidad de Maturin a los 
					<?php 
					switch ($solicitud->created_at->day) {
						case '1':
							echo "Primero";
							break;
						case '2':
							echo "Dos";
							break;
						case '3':
							echo "Tres";
							break;
						case '4':
							echo "Cuatro";
							break;
						case '5':
							echo "Cinco";
							break;
						case '6':
							echo "Seis";
							break;
						case '7':
							echo "Siete";
							break;
						case '8':
							echo "Ocho";
						case '9':
							echo "Nueve";
							break;
						case '10':
							echo "Diez";
							break;
						case '11':
							echo "Once";
							break;
						case '12':
							echo "Doce";
							break;
						case '13':
							echo "Trece";
							break;
						case '14':
							echo "Catorce";
							break;
						case '15':
							echo "Cinco";
							break;
						case '16':
							echo "Dieciseis";
							break;
						case '17':
							echo "Diecisiete";
							break;
						case '18':
							echo "Dieciocho";
						case '19':
							echo "Diecinueve";
							break;
						case '20':
							echo "Veinte";
							break;
						case '21':
							echo "Veintiuno";
							break;
						case '22':
							echo "Veintidos";
							break;
						case '23':
							echo "Veintitres";
							break;
						case '24':
							echo "Veinticuatro";
							break;
						case '25':
							echo "Veinticinco";
							break;
						case '26':
							echo "Veintiseis";
							break;
						case '27':
							echo "Veintisiete";
							break;
						case '28':
							echo "Veintiocho";
						case '29':
							echo "Veintinueve";
							break;
						case '30':
							echo "Treinta";
							break;
						case '30':
							echo "Treinta y uno";
							break;							
						default:
							// code...
							break;
					}
					?> 

					({{ $solicitud->created_at->day}}) 
					dias del mes de 
					{{$solicitud->created_at->monthName}}
					de 
					{{$solicitud->created_at->year }}.

					<br><br><br><br><br><br><br><br><center> LCDO Juan J. Guerra<br>Gerente de administracion de Recursos Humanos<br> y Servicios Generales (E)
				</center>
			</tr>
		</table>
	</div>
</body>
</html>