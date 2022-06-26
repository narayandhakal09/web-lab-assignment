<?php

include "../../includes/dbconnect.php";




$name = $_POST['name'] ?? ' ';
$email = $_POST['email'];
$password =password_hash($_POST['password'], PASSWORD_BCRYPT);
$date = $_POST['date'];
$color = $_POST['color'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$hobby = implode(",",$_POST['hobby']);
$nation = $_POST['nation'];


$sql = "INSERT INTO students (`name` `email`, `password`, `dob`, `favorite_color`, `weight`, `gender`, `hobbies`, `nationality`)
          VALUES('$name',$email','$password','$date','$color',$weight,'$gender','$hobby','$nation');";



if($conn->query($sql)== TRUE){
    die("SUCESS");
}
else{
    die("error");

}