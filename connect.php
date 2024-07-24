<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$course = $_POST["course"];
$email = $_POST["email"];



$con = mysqli_connect("localhost", "root", "");

if($con){
$q1= "create database eduera";
$q2= "use eduera";
$q3= "create table details(name varchar(20), phone int, course varchar(20), email varchar(20) )";
$q4= "insert into  details values('$name',$phone,'$course','$email')";

mysqli_query($con,$q1);
mysqli_query($con,$q2);
mysqli_query($con,$q3);
mysqli_query($con,$q4);

}

else{
    echo"Erro <br>";
}
?>

