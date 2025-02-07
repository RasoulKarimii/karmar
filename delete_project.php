<?php
// شامل فایل header.php برای بارگذاری هدر صفحه
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // اتصال به پایگاه داده
    $conn = new mysqli('localhost', 'root', '', 'add');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM y WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "پروژه با موفقیت حذف شد!";
        header('Location: project.php');
    } else {
        echo "خطا در حذف پروژه: " . $conn->error;
    }

    $conn->close();
}
?>

<?php
// شامل فایل footer.php برای بارگذاری فوتر صفحه
include('footer.php');
?>
