<?php
include("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $description = $_POST['description'];

    $conn = new mysqli('localhost', 'root', '', 'login');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO y (name, description) VALUES ('$name', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "پروژه با موفقیت اضافه شد!";
        header('Location: project.php');
    } else {
        echo "خطا در افزودن پروژه: " . $conn->error;
    }

    $conn->close();
}
?>
<center>
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
<center>
<?php
include('footer.html');
?>
