<?php
$basedat = new PDO('mysql:host=localhost; dbname=base', 'root','');
//if(empty($_POST['user']))
try{
    $basedat = new PDO('mysql:host=localhost;dbname=base','root','');
    foreach($basedat->query('SELECT * from usuarios) as $fila){
         print_r($fila);
    } 
     $basedat=null;
}catch (PDOException $e){
    print "Error: ". $e->getMessage(). "<br>";
    die();
}
?>
