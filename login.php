<?php
include("header.php");
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card p-4 shadow-sm">
        <h1 class="text-center mb-4">ورود</h1>
        <form id="form" action="login_1.php" method="post">
          <div class="mb-3">
            <label id="label" for="email" class="form-label">ایمیل</label>
            <input type="text" id="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label id="label" for="password" class="form-label">رمز عبور</label>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <button id="button" type="submit" class="btn btn-primary w-100">ورود</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include("footer.html");
?>
