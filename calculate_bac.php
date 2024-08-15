<?php 
$weight = $_POST['weight'];
$unit = $_POST['unit'];
$gender = $_POST['gender'];
$drinks = $_POST['drinks'];
$alcohol_content = $_POST['alcohol_content'];
$time_elapsed = $_POST['time_elapsed'];

if ($unit == "kg") {
    $weight = $weight * 2.20462;
}


if($gender=="male"){
    $gender_constant=0.73;
}
else{
    $gender_constant=0.66;
}

$alcohol_consumed=$drinks*$alcohol_content;

 echo "alcohol consumed=$alcohol_consumed<br>";


$BAC = (($alcohol_consumed * 5.14) / ($weight * $gender_constant)) - 0.015 * $time_elapsed;

$BAC_roundedoff=round($BAC,2);


if($BAC_roundedoff<0){
    $BAC_roundedoff=0;
    $result="Safe to Drive";
}

if ($BAC_roundedoff<0.08){

   $result="Safe to Drive";
}
else{

    $result="Not Safe to Drive";
}

echo"BAC=$BAC_roundedoff%";

echo"<br>$result";

?>
