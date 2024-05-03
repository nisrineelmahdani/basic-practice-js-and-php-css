<?php 
$fname=$_GET["firstname"];
$lname=$_GET["lastname"];
$psswd=$_GET["password"];
$Grade =$_GET["grade"];
$Filiere=$_GET["filiere"];
/*echo "your firstname is: $fname \n ";*/

if (isset($fname) && !empty($fname)){
    echo "your firstname is: $fname    <br> ";
}
else{
    echo" please enter a valid name  <br> ";
}
echo "your lastname is: $lname  <br> ";
echo "your password is: $psswd  <br> ";

foreach($Grade as $val){
    echo " your grade is : $val <br> ";
}
foreach($Filiere as $fl){
    echo " your class is : $fl";
}
/*
$food=array("pasta"=>"50DH", "tajin"=>"70DH", "kouskous"=>"100DH","other"=>"checkthemenu");
foreach($food as $onefood=>$val){
    echo $food[$onefood];
}
$food = array("pasta", "tajin", "kouskous", "other");
foreach($food as $onefood) {
    echo $onefood ;
}
$food = array("pasta", "tajin", "kouskous", "other");
for ( $i=0; $i<sizeof($food);$i++){
    echo $food[$i];
}

$tab[0]=16;
$tab[1]="nisrine";
$tab[2]="elmahdani";
$tab[5]="computerscience";
$tab[6]="student";
$tab[7]="by";
foreach($tab as $val){
    echo $val;
}
$tabb["name"]="nisrine";
$tabb["last"]="elmahdani";
$tabb["age"]="18";
$tabb["school"]="est essaouira";
$tabb["filiere"]="GI";
foreach ($tabb as $cle=>$val){
    echo $val;
}
function sayhi($name){
    echo "  hey $name  ";
}
if(isset($fname) && !empty($fname)){
    sayhi($fname)   ;
}
function grade($name, $grade){
switch($grade){
    case "A" : echo "you did amazing $name "; break;
    case "b" : echo "you did well  $name ";break;
    case "c" : echo "keep pushing  $name ";break;
    case "d" : echo "you falied! $name ";break;
    default: echo "please enter your grade ";

}
}
function sayhi($name){
    echo "  hey $name  ";
}
if(isset($fname) && !empty($fname)){
    sayhi($fname);
    grade($fname, $grade)   ;}*/

?>