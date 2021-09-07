<?php 
require ('./Person.php');

$per1 = new Person();
$salary = $per1->getSalary();

echo ($salary);    
?>
