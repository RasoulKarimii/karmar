<?php
include("header.php");
?>
<?php
if (isset($_POST["name"]) && !empty($_POST["name"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset($_POST["repassword"]) && !empty($_POST["repassword"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $repassword = htmlspecialchars($_POST["repassword"]);
    if ($password !== $repassword) {
        print("<p>رمز عبور و تکرار رمز عبور با هم مطابقت ندارند</p>");
    } else {
        echo("<p>نام: " . $name . "</p>");
        echo("<p>ایمیل: " . $email . "</p>");
        // echo("<p>کارفرما/فریلنسر: " . $a . "</p>");
    }
} else {
    echo("<p>پر کردن همه فیلدها الزامی است</p>");
}
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","login");
mysqli_query($c,"INSERT INTO `loginn` (`name`, `email`, `password`) 
VALUES ('$name', '$email', '$password');");
mysqli_close($c);

echo("ثبت نام شما با موفقیت انجام شد ✅");
?>

<?php
include("footer.html");
?>