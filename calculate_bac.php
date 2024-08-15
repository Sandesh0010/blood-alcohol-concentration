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


if($gender=="Male"){
    $gender_constant=0.73;
}
else{
    $gender_constant=0.66;
}

$alcohol_consumed=$drinks*$alcohol_content;

//echo "$alcohol_consumed"."grams";


$BAC = (($alcohol_consumed * 5.14) / ($weight * $gender_constant)) - 0.015 * $time_elapsed;

// echo"$BAC";


if ($BAC<0.08){

   $result="Safe to Drive";
}
else{

    $result="Not Safe to Drive";
}

?>
