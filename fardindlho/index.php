
<?php
    if($_POST['username'] === "f@gmail.com"){
        if($_POST['password'] == '1234' ){
            echo "Helloo!";
        }else {
            echo "password is wrong";
        }
    } else {
        echo "username is wrong";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP app1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&family=Spline+Sans:wght@300&display=swap');
        *{
            font-size: 1.3rem;
            font-family: 'Spline Sans'
        }
    </style>
</head>
<body>
    <hr>
    <form action="#" method="POST">
        <label for="username">Enter Your user name:</label>
        <input type="email" id="username" name="username">
        <br>
        <label for="password">Enter your password:</label>
        <input type="password" name="password" id="password"><br>
        <hr>
        <input type="submit">
    </form>
</body>
</html>