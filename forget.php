<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
echo '<div class="form-body without-side">';
echo '<div class="website-logo">';
echo '<a href="index.html">';
echo '<div class="logo">';
echo '<img class="logo-size" src="images/logo-light.svg" alt="">';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div class="row">';
echo '<div class="img-holder">';
echo '<div class="bg"></div>';
echo '<div class="info-holder">';
echo '<img src="images/graphic3.svg" alt="">';
echo '</div>';
echo '</div>';
echo '<div class="form-holder">';
echo '<div class="form-content">';
echo '<div class="form-items">';
echo '<h3>Password Reset</h3>';
echo '<p>To reset your password, enter the email address you use to sign in to iofrm</p>';
echo '<form>';
echo '<input class="form-control" type="text" name="username" placeholder="E-mail Address" required>';
echo '<div class="form-button full-width">';
echo '<button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '<div class="form-sent">';
echo '<div class="tick-holder">';
echo '<div class="tick-icon"></div>';
echo '</div>';
echo '<h3>Password link sent</h3>';
echo '<p>Please check your inbox iofrm@iofrmtemplate.io</p>';
echo '<div class="info-holder">';
echo '<span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<script src="js_1/jquery.min.js"></script>
<script src="js_1/popper.min.js"></script>
<script src="js_1/bootstrap.min.js"></script>
<script src="js_1/main.js"></script>
<script src="js_1/cleave.min.js"></script>
</body>
</html>