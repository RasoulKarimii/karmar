<?php
include("header.php");
?>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center">تماس با ما</h3>
                    <form action="send_message.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">نام</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">موضوع</label>
                            <input type="text" name="subject" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">پیام</label>
                            <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ارسال پیام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.html"); ?>

