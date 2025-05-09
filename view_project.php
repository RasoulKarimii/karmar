<?php
include("header.php");
?>
<center>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'login');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM y WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
    } else {
        echo "پروژه‌ای با این شناسه یافت نشد.";
        exit;
    }
    $conn->close();
} else {
    echo "شناسه پروژه ارسال نشده.";
    exit;
}
?>

<div class="container my-4">
    <div class="card bg-light p-4 shadow-sm">
        <h1 class="card-title"><?php echo $project['name']; ?></h1>
        <p class="card-text"><?php echo $project['description']; ?></p>
        <a href="project_1.php" class="btn btn-secondary mt-3">بازگشت</a>
        <a href="project_1.php" class="btn btn-secondary mt-3" id="10">درخواست برای پروژه</a>
    </div>
</div>

<center>
<?php
include("footer.html");
?>
