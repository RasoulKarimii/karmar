<?php
include("header.php");
?>
<center>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = mysqli_connect("localhost", "root", "", "login");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);


    $sql = "SELECT * FROM loginn WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = ($user['admin'] == 1) ? 'employer' : 'freelancer';
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['login'] = true; 

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('ایمیل یا رمز عبور اشتباه است.');</script>";
    }

    mysqli_close($conn);
}
?>

<center>
<?php
include("footer.html");
?>
