<?php

include_once "../../includes/dbconnect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .form-group {
            margin-top: 10px;
        }

        label {}
    </style>
    <form action="../save/" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" id="name" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="email" name="email" value="email@email.com">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" id="password" placeholder="password" name="password" value="password">
        </div>
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" id="date" placeholder="date" value="date" name="date">
        </div>
        <div class="form-group">
            <label for="color">Color :</label>
            <input type="color" id="color" name="color">
        </div>
        <div class="form-group">
            <label for="weight">Weight kg :</label>
            <input type="number" id="weight"  name="weight">
        </div>
        <div class="form-group">
            <label for="gender">Gender :</label>
            <div>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="other">other</label>
                <input type="radio" id="other" name="gender" value="other">
            </div>

        </div>
        <div class="form-group">
            <label>Hobbies :</label>
            <input type="checkbox" id="travelling" value="travelling" name="hobby[]"><label for="travelling">Travelling</label>
            <input type="checkbox" id="reading" value="reading" name="hobby[]"><label for="reading">Reading</label>
            <input type="checkbox" id="singing" value="singing" name="hobby[]"><label for="singing">Singing</label>
            <input type="checkbox" id="coding" value="coding" name="hobby[]"><label for="coding">Coding</label>
        </div>
        <div class="form-group">
            <label for="nationality">Nationality :</label>
            <select name="nation" id="">
                <option value="NP">Nepal</option>
                <option value="IN">India</option>
                <option value="CH">China</option>
                <option value="UK">United Kingdom</option>
            </select>
        </div>

        <div class="form-group">
            <label id="profile">Profile</label>
            <input type="file" name="profile" id="profile" accept=".png">
        </div>
        <div class="form-group">

            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
        </div>
    </form>

</body>

</html>