<?php
include("header.html");
?>
<div class="login">
<form id="form" action="login_1.php" method="post">
    <h1 id="h1">ورود</h1>
    <label id="label" for="email">ایمیل</label>
    <input type="text" id="email" name="email">  <!-- name="email" اضافه شد -->
    <label id="label" for="password">رمز عبور</label>
    <input type="password" id="password" name="password">  <!-- name="password" اضافه شد -->
    <button id="button" type="submit">ورود</button>
</form>

</div>
<?php
include("footer.html");
?>
