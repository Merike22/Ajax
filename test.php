<?php

$con = mysqli_connect("localhost","root","","test");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sel = "select * from users where email='$email'";

$run = mysqli_query($con,$sel);
$check_email = mysqli_num_rows($run);

if ($check_email==1) {
    echo"<h2>Selline e-mail on juba olemas, palun sisesta uus!</h2>";
    exit();

} else {
    $insert = "insert into users(name,pass,email) VALUES ('$name','$pass','$email')";
    $run_insert = mysqli_query($con,$insert);
        if($run_insert) {
            echo "<h2>Registreerumine õnnestus! Täname!</h2>";
        }
}

?>
