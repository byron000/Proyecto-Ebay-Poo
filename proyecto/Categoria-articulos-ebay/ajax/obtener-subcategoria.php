<?php
 $archivo = fopen("../data/subcategoria1.json","r");
 $respuesta = array();
 while(($linea=fgets($archivo))){
     $respuesta[] = json_decode($linea,true);
 }
 echo json_encode($respuesta);
 fclose($archivo);
?>