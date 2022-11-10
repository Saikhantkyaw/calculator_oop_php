
<?php 
   spl_autoload_register('my_load');


    function my_load($className){
      $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($url, 'include')!==false) {
      	$path='../class/';
      }else{
      	$path='class/';
      }



       $extention='.class.php';
       $full_path=$path.$className.$extention;
      
       include_once ("$full_path");
    }
 ?>

 