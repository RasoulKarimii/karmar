<?php
 include('header.php');

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
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $update_sql = "UPDATE y SET name = '$name', description = '$description' WHERE id = $id";
        if ($conn->query($update_sql) === TRUE) {
            echo "پروژه با موفقیت ویرایش شد!";
            header('Location: project.php');
        } else {
            echo "خطا در ویرایش پروژه: " . $conn->error;
        }
    }

    $conn->close();
}
?>

<div class="container my-4">
    <h1>ویرایش پروژه</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">نام پروژه</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $project['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">توضیحات پروژه</label>
            <textarea class="form-control" id="description" name="description" required><?php echo $project['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning">ویرایش پروژه</button>
    </form>
</div>

<?php
include('footer.html');
?>
