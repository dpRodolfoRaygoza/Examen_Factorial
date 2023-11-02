<?php 

//aqui se recibe el numero que dijita el usuario

$numero= $_POST["numero"];
echo"El numero capturado es:".$numero;
echo"<br>";
$resultado=1;
$acumulador;
echo "Entonces: ".$numero."!= ";
if($numero>0){
    for( $i=1; $i<=$numero; $i++){
       
    
    echo $numero."X".$i." ";
     
    }  
    
    echo"<br>";

for( $i=1; $i<=$numero; $i++){
   

    //echo $numero."X".$i." ";
  $resultado*=$i; 
}
echo "El resultado de la operacion es: ".$resultado;
}

?>