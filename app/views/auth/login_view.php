<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rovote</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/auth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/auth/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/auth/css/elegant-forms-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/auth/css/elegant-forms-theme6.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="<?php echo BASE_URL; ?>public/auth/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="<?php echo BASE_URL; ?>public/auth/images/graphic2.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome Back!</h3>
                        <p>Hello, Please fill out the form below to get started!</p>
                        <div class="page-links">
                            <a href="#" class="active">Login</a><a href="#">Register</a>
                        </div>
                        <form method="post" action="">

                            <?php flash_alert(); ?>

                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>public/auth/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>public/auth/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>public/auth/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>public/auth/js/main.js"></script>
</body>


</html>