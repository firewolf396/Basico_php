<?php
//linea
/*
*BLOQUE
*/
echo 'hola mundo php!!!';
echo "<br>";
$nombre = 'pepe';
$edad = 12;
$promedio = 2.3;
$b = true; //false
$appellido = 'peres';
echo $nombre . ' ' . $appellido;
echo "<br>";
echo "$nombre <strong>$appellido<strong>";
$numero = [12,11,10,9,8,7,6,5,4,3,2,1,0];
//for----------------------------------
echo '<br>';

for ($i = 0; $i < 13; $i++) {
    echo$numero[$i];
    echo '<br>';
}
$i = 0;
echo '<br>';
while ($i < count($numero)) {
    echo$numero[$i];
    echo '<br>';
    $i++;
}
//do while
$i = 0;
echo '<br>';
do  {
    echo$numero[$i];
    echo '<br>';
    $i++;
}while ($i < count($numero));
//foreach
echo '<br>';
foreach($numero as $index=>$value){
    echo "$index : $value";
    echo '<br>';
}
if(true) {

} elseif (true){

}else if (true){

}else {

}
$categoria = 'a';
switch($categoria){
    case 'a':
        break;
    case 'b':
        break;
    default:

        break;
}
// las funciones son igules a las que se crrean en javascpirt
//ej
function saludar ($nombre){
    echo '<br>';
    echo "hola $nombre";
    echo '<br>';
}
saludar('pepe');
function saludo($nombre){
    return "hola $nombre";
}
echo saludo('juanita');
//Array no ordenado
$persona =[
    'nombre' => 'pepe',
    'apellido' => 'peres',
    'edad' => 30,
    'jobs' => 'ing'
];
echo '<br>';
echo $persona['nombre'];
echo '<br>';
foreach($persona as $index=>$value){
    echo "$index : $value";
    echo '<br>';
}
?>
