<?php


$final = "";
$archivo="wif-keys.csv";
$csv= file_get_contents($archivo);
$array = preg_split('/[,]/', $csv);
$tam = count($array) - 1 ;

 
for ($i = 0; $i < $tam; $i++) {
     
 $array[$i] =  (delanteDe (':', "$array[$i]"));
 
// echo  $array[$i];
  $final = $final.$array[$i].",";

} 

$final = substr($final, 0, -1);

//Creamos el JSON
$json_string = json_encode($final);
file_put_contents("claves.json", $json_string);

echo "termine";

function delanteDe ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    }


?>