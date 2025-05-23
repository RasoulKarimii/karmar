<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>کارمار</title>
    <style type="text/css">



</style>
<link rel="icon" href="280x280.jpg" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <span class="navbar-brand">کارمار</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="index.php">صفحه ورودی</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="#sh">
                      پاصفحه
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="darbare.php">
                      درباره ما
                  </a>
              </li>
  
              <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'employer') { ?>
                  <li class="nav-item">
                      <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="project.php">پروژه گذاری</a>
                  </li>
              <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'freelancer') { ?>
                  <li class="nav-item">
                      <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="project_1.php">پروژه</a>
                  </li>
              <?php } ?>


              <li class="nav-item">
                <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="tamrin.php">نمونه سوال</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="daste.php">آموزش</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg" href="re.php">ثبت نام</a>
              </li>
              <?php if(isset($_SESSION["login"])){ ?>
                  <li class="item_menu d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg">
                      <a href="logout.php">خروج</a>
                  </li>
              <?php }else{ ?>
                  <li class="item_menu d-flex justify-content-center align-items-center px-4 py-2 mx-2 text-white bg-dark rounded-3 shadow-lg">
                      <a href="login.php">ورود</a>
                  </li>
              <?php } ?>

            </ul>
            <form action="search.php" method="GET" class="d-flex m-3" role="search">
              <input class="form-control me-2" name="q" type="search" placeholder="جستجو" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">جستجو</button>
            </form>

          </div>
        </div>
      </nav>
    </div>
    <main class="container">
