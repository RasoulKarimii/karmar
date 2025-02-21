<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style type="text/css">



</style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">صفحه اصلی</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="project.php">پروژه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daste.php">دسته بندی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sh">درباره ما</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="re.php">ثبت نام</a>
              </li>
              <?php if(isset($_SESSION["login"])){ ?>
                <li class="item_menu"><a href="logout.php">خروج</a></li>
                <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">ورود</a>
              </li>
              <?php } ?>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <main class="container">
