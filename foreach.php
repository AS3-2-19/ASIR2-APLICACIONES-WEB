
<?php 
//$numeros = [1,2,3]; 
$numeros =[
        [1,2,3,4,5],
        [6,7,8,9]
        
];
//foreach ($colors as $value) {
    //echo "$value <br>";
//}
//$suma=0;
//for ($i=0; $i< count($numeros); $i++){
    //$suma= $suma+$numeros[$i];
///}
//echo $suma;

$suma=0;
for ($i=0; $i< count($numeros); $i++){
    for ($w=0; $w< count($numeros[$i]); $w++){
        $suma= $suma+$numeros[$i][$w];
    }
     
}
echo $suma;


?>