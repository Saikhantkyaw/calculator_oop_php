<?php 
declare(strict_types=1);
 include ("load.php");

  if ($_POST) {
  	$oper=$_POST["operation"];
  	$num1=$_POST["num1"];
     $num2=$_POST["num2"];
 $calculation=new cal($oper,(int)$num1,(int) $num2);

 try {
 	echo $calculation->operation();
 } catch (TypeError $e) {
 	echo 'you are wrong '.$e->getMassage();
 }
}
 ?>