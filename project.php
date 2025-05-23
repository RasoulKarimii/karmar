<?php
include("header.php");
?>
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM y";
$result = $conn->query($sql);
?>

<div class="container my-4">
    <h1>پروژه‌ها</h1>
    <a href="add_project.php" class="btn btn-success mb-3">افزودن پروژه جدید</a>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <a href="edit_project.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">ویرایش</a>
                            <a href="delete_project.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">حذف</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>هیچ پروژه‌ای یافت نشد.</p>";
        }
        ?>
    </div>
</div>

<?php

$conn->close();
?>
<center>
<?php
include("footer.html");
?>
