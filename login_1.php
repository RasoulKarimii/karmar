<?php
include("header.php");
?>
<center>
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $c = mysqli_connect("localhost", "root", "", "login");
    $m = mysqli_query($c, "SELECT * FROM `loginn` WHERE `email`='$email' and `password`='$password'");
    mysqli_close($c);

    $r = mysqli_fetch_array($m);
    if ($r) {
        $_SESSION["login"]=true;
        ?>
        <script>
            location.replace("index.php");
        </script>
        <?php
    } else {
        echo("ایمیل یا رمز عبور صحیح نیست");
    }
} else {
    echo "لطفاً ایمیل و رمز عبور را وارد کنید.";
}
?>
<center>
<?php
include("footer.html");
?>
