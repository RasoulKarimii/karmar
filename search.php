<?php
include("header.php");
?>
<center>
<?php

$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$search = isset($_GET['q']) ? $_GET['q'] : "";  


if ($search != "") {
    $sql = "SELECT * FROM y WHERE name LIKE '%$search%'";
} else {

    $sql = "SELECT * FROM y";
}

$result = $conn->query($sql);
?>

<div class="container my-4">
    <h1>پروژه‌ها</h1>


    <form class="d-flex mb-4" action="search.php" method="GET">
        <input type="text" class="form-control me-2" name="q" value="<?php echo htmlspecialchars($search); ?>" placeholder="جستجوی پروژه‌ها" required>
        <button class="btn btn-outline-success" type="submit">جستجو</button>
    </form>

    <div class="row">
        <?php

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card text-center bg-light">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="project.php?id=<?php echo $row['id']; ?>">
                                        <?php echo htmlspecialchars($row['name']); ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
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
