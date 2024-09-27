<?php
include("./functions/functions.php");
include("./functions/session.php");
include("./include/header.php");
 ?>
<?php
include("./include/navbar.php");
?>
<?php confirm_login();?>
    
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5 text-primary">
                Team Members
            </h1>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="card p-2 my-5 shadow-lg border border-2 border-primary">
                    <div class="raj my-2">
                        <img class="rounded-circle border shadow"
                            src="./images/ADITYA.jpg"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-center">
                            ADITYA RAI
                        </h1>
                    </div>
                    <div class="card-footer text-center border">
                        <a href="https://www.linkedin.com/">
                            <i class="bi bi-linkedin text-primary"></i>
                        </a>
                        <a href="https://www.facebook.com/">
                            <i class="bi bi-facebook text-primary"></i>
                        </a>
                        <a href="https://www.instagram.com/aditya0910rai/">
                            <i class="bi bi-instagram text-danger"></i>
                        </a>
                        <a href="https://github.com/rai0910">
                            <i class="bi bi-github text-dark"></i>
                        </a>
                        <a href="https://wa.me/8707862081">
                            <i class="bi bi-whatsapp text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-2 my-5 shadow-lg border border-2 border-primary">
                    <div class="raj my-2">
                        <img class="rounded-circle border shadow"
                            src="./images/BRUNO.jpg"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title text-center">
                            BRUNO
                        </h1>
                    </div>
                    <div class="card-footer text-center border">
                        <a href="https://www.linkedin.com/in/">
                            <i class="bi bi-linkedin text-primary"></i>
                        </a>
                        <a href="https://www.facebook.com/">
                            <i class="bi bi-facebook text-primary"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="bi bi-instagram text-danger"></i>
                        </a>
                        <a href="https://github.com/RAI0910">
                            <i class="bi bi-github text-dark"></i>
                        </a>
                        <a href="https://wa.me/8707862081">
                            <i class="bi bi-whatsapp text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php
 include("./include/footer.php");
?>