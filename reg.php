<?php
include("header.html");
?>
<?php
if (isset($_POST["Firstname"]) && !empty($_POST["Firstname"]) &&
    isset($_POST["Lastname"]) && !empty($_POST["Lastname"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["Username"]) && !empty($_POST["Username"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset($_POST["repassword"]) && !empty($_POST["repassword"])) {
    $Firstname = htmlspecialchars($_POST["Firstname"]);
    $Lastname = htmlspecialchars($_POST["Lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $Username = htmlspecialchars($_POST["Username"]);
    $password = htmlspecialchars($_POST["password"]);
    $repassword = htmlspecialchars($_POST["repassword"]);
    if ($password !== $repassword) {
        print("<p>رمز عبور و تکرار رمز عبور با هم مطابقت ندارند</p>");
    } else {
        echo("<p>نام: " . $Firstname . "</p>");
        echo("<p>فامیل: " . $Lastname . "</p>");
        echo("<p>ایمیل: " . $email . "</p>");
        echo("<p>نام کاربری: " . $Username . "</p>");
        // echo("<p>کارفرما/فریلنسر: " . $a . "</p>");
    }
} else {
    echo("<p>پر کردن همه فیلدها الزامی است</p>");
}
?>

<?php
include("footer.html");
?>