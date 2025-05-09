<?php
include("header.php");

if (
    isset($_POST["name"]) && !empty($_POST["name"]) &&
    isset($_POST["lastname"]) && !empty($_POST["lastname"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["username"]) && !empty($_POST["username"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset($_POST["repassword"]) && !empty($_POST["repassword"]) &&
    isset($_POST["admin"]) 
) {
    $name = htmlspecialchars($_POST["name"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $repassword = htmlspecialchars($_POST["repassword"]);
    $admin = $_POST["admin"]; 

    if ($password !== $repassword) {
        echo "<script>location.replace('re.php');</script>";
    } else {
        $c = mysqli_connect("localhost", "root", "", "login");

        $sql = "INSERT INTO `loginn` (`name`, `email`, `password`, `lastname`, `username`, `admin`) 
                VALUES ('$name', '$email', '$password', '$lastname', '$username', '$admin');";

        $result = mysqli_query($c, $sql);
        mysqli_close($c);

        if ($result === true) {
            echo "<script>location.replace('login.php');</script>";
        } else {
            echo "در عملیات ثبت نام مشکلی پیش آمده";
        }
    }
} else {
    echo "<p>پر کردن همه فیلدها الزامی است</p>";
}


include("footer.html");
?>