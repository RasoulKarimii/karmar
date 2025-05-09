<?php
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'login');

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
include('footer.php');
?>
