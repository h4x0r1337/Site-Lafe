<?php
function listar_historial(){
	//Conexión con la base de datos
	$pconexion = abrirConexion();
	//Selección de la base de datos
	seleccionarBaseDatos($pconexion);

	//Construcción de la sentencia SQL
	$cquery = "SELECT historial.id, historial.fecha, historial.precio, historial.address, historial.estado";
	$cquery .= " FROM historial";
	
	
	
	//Se ejecuta la sentencia SQL
	$lresult = mysql_query($cquery, $pconexion); 
	
	$ccontenido = "";
	
	if (!$lresult) {
		$cerror = "No fue posible recuperar la información de la base de datos.<br>";
		$cerror .= "SQL: $cquery <br>";
		$cerror .= "Descripción: ".mysql_error($pconexion);
		die($cerror);
	}
	else{
		//Verifica que la consulta haya devuelto por lo menos un registro
		if (mysql_num_rows($lresult) > 0){
			//Recorre los registros arrojados por la consulta SQL
			while ($adatos = mysql_fetch_array($lresult)){
				$ccontenido .= "<tr>";
				$ccontenido .= "<td>".$adatos['id']."</td>";
				$ccontenido .= "<td width=\"10\">&nbsp;</td>";
				$ccontenido .= "<td>".$adatos['address']."</td>";
				$ccontenido .= "<td width=\"10\">&nbsp;</td>";
				$ccontenido .= "<td>".$adatos['address']."</td>";
				$ccontenido .= "<td width=\"10\">&nbsp;</td>";
				$ccontenido .= "<td>$".$adatos['precio']."</td>";
				$ccontenido .= "<td width=\"10\">&nbsp;</td>";
				$ccontenido .= "<td>".$adatos['estado']."</td>";
				$ccontenido .= "</tr>";
			}
		}
	}
	
	mysql_free_result($lresult);
	cerrarConexion($pconexion); 
	 
	if ( empty($ccontenido) ){
		$ccontenido .= "<tr>";
		$ccontenido .= "<td colspan=\"15\">No se obtuvieron resultados</td>";		
		$ccontenido .= "</tr>";
	}

	
	
	return $ccontenido; 
}


?>