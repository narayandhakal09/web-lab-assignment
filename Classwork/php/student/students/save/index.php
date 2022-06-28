<?php
// $id = $_POST['id'];

include "../../includes/utilis/dbconnect.php";

if (isset($_POST['submit'])) {
    
   
  

$name = $_POST['name'] ?? ' ';
$email = $_POST['email'];
$password =password_hash($_POST['password'], PASSWORD_BCRYPT);
$date = $_POST['date'];
$color = $_POST['color'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$hobby = implode(",",$_POST['hobby']);
$nation = $_POST['nation'];


$sql = "INSERT INTO students (`name`, `email`, `password`, `dob`, `favorite_color`, `weight`, `gender`, `hobbies`, `nationality`)
          VALUES('$name','$email','$password','$date','$color',$weight,'$gender','$hobby','$nation');";



if($conn->query($sql)== TRUE){
    // die("SUCESS");
    header('Location:../create/?sucess=sucess');
    // echo "<p>Sucess</p>";
}
else{
    header('Location:../create/?sucess=error');


}
}
if (isset($_POST['update'])) {
   
        

       

        $id =$_POST['id'] ?? ' ';
       

        $name = $_POST['name'] ?? ' ';
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $date = $_POST['date'];
        $color = $_POST['color'];
        $weight = $_POST['weight'];
        $gender = $_POST['gender'];
        $hobby = implode(",", $_POST['hobby']);
        $nation = $_POST['nation'];


  
    $sql = "UPDATE students SET name='$name',email='$email',password='$password',dob='$date',favorite_color='$color',weight=$weight,gender='$gender',hobbies='$hobby',nationality='$nation' WHERE id='$id'";






     


        if ($conn->query($sql) == TRUE) {
            // die("SUCESS");
            header('Location:../../../?sucess=sucess');
            // echo "<p>Sucess</p>";
        } else {
            header('Location:../../../?sucess=error');
        }
    }




