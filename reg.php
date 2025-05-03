<?php
include("header.php");
?>
<?php
if (isset($_POST["name"]) && !empty($_POST["name"]) &&
    isset($_POST["lastname"]) && !empty($_POST["lastname"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["username"]) && !empty($_POST["username"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset($_POST["repassword"]) && !empty($_POST["repassword"])) {
    $name = htmlspecialchars($_POST["name"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $repassword = htmlspecialchars($_POST["repassword"]);
    //اینجا یه شرط برای این میزاریم که ببینیم پسورد و ریپسورد باهم برابر هست یا نه
    if ($password !== $repassword) {
        
        ?>
        <script>
            //re=ریجستر
            location.replace("re.php");
        </script>
        <?php
    } else {
        $name=$_POST["name"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        //ایثنجا به بانک حافظه  متصل میشویم
        $c=mysqli_connect("localhost","root","","login");
        $result=mysqli_query($c,"INSERT INTO `loginn` (`name`, `email`, `password`, `lastname`, `username`) 
        VALUES ('$name', '$email', '$password', '$lastname', '$username');");
        mysqli_close($c);
        
        if($result===true)
        {
            ?>
            <script>
                location.replace("login.php");
            </script>
            <?php
        }else
        {
            echo("در عملیات ثبت نام مشکلی پیش آمده");
        }
    }
} else {
    echo("<p>پر کردن همه فیلدها الزامی است</p>");
}


?>

<?php
include("footer.html");
?>