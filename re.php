<?php
include("header.html");
?>

<form action="reg.php" method="post" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Firstname</label>
    <input type="text" class="form-control" id="Firstname" name="Firstname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="Lastname" name="Lastname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="Username" name="Username" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">email</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <div class="invalid-feedback">
      Please provide a valid email.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" required>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">repassword</label>
    <input type="password" class="form-control" id="repassword" name="repassword" required>
    <div class="invalid-feedback">
      Please provide a valid repassword.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>



<?php
include("footer.html");
?>