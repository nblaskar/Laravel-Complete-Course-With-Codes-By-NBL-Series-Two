<?php
//Without Autoload file
// require('./realme/realme2.php');
// require('./redmi/redmi2.php');
// require('./redmi/redmi3.php');
// require('./realme/realmemobile.php');
// require('./redmi/redmimobile.php');
// require('./myclasses/class1.php');
// require('./myclasses/class2.php');

//With Autoload file
require('./vendor/autoload.php');
displaymodel1();
displaymodel2();
displaymodel3();
$realme= new Realmemobile;
$redmi= new Redmimobile;
$c1=new Class1;
// $c2=new Class2;




?>