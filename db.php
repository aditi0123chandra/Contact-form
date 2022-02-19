<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['details'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $details = $_POST['details'];

        $query = "insert into contact_form(name,email,details) values('$name' , '$email' , '$details')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run) {
            echo "Form submitted!";
        }
        else {
            echo "Form not submitted!";
        }

    }
    else {
        echo "all fields required!";
    }
}

?>