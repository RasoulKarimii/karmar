
<?php
include("header.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $conn = new mysqli("localhost", "root", "", "login");

    if ($conn->connect_error) {
        die("خطا در اتصال به دیتابیس: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<div style='padding:20px; text-align:center; direction:rtl;'>✅ پیام شما با موفقیت ارسال شد!</div>";
    } else {
        echo "<div style='padding:20px; text-align:center; direction:rtl; color:red;'>❌ خطا در ذخیره پیام: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: contact.php");
    exit();
}
?>

<?php
include("footer.html");
?>
