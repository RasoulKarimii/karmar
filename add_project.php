<?php
include("header.php");
// شامل فایل header.php برای بارگذاری هدر صفحه


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // گرفتن داده‌ها از فرم
    $name = $_POST['name'];
    $description = $_POST['description'];

    // اتصال به پایگاه داده
    $conn = new mysqli('localhost', 'root', '', 'add'); // بانک اطلاعاتی و جدول y را اینجا وارد کنید

    // بررسی اتصال
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO y (name, description) VALUES ('$name', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "پروژه با موفقیت اضافه شد!";
        header('Location: project.php'); // هدایت به صفحه پروژه‌ها
    } else {
        echo "خطا در افزودن پروژه: " . $conn->error;
    }

    $conn->close();
}
?>

<div class="container my-4">
    <h1>افزودن پروژه جدید</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">نام پروژه</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">توضیحات پروژه</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">افزودن پروژه</button>
    </form>
</div>

<?php
// شامل فایل footer.php برای بارگذاری فوتر صفحه
include('footer.html');
?>
