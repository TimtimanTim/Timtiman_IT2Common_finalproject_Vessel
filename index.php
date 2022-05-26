<?php 

SESSION_START();

$acc_username = "admin";
$acc_password = "password";

$url_add = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if(isset($_REQUEST['login_button']) === true){
	if($_REQUEST['form_username'] != $acc_username){
			header("Location: ".$url_add."?notexist");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password){
			header("Location: ".$url_add."?wrongpass");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] == $acc_password){
			header("Location: ".$url_add."?success");

			$_SESSION['ses_username'] = $acc_username;
			$_SESSION['ses_password'] = $acc_password;
			$_SESSION['ses_fullname'] = $acc_fullname;
			$_SESSION['ses_address'] = $acc_address;
			
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vessel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
   

</head>
<?php
echo '<body>';
echo '<div class="form-body without-side">';
echo '<div class="website-logo">';
echo '<a href="index.html">';
echo '<div class="logo">';
echo '<img class="logo-size" src="img/images/logo-light.png" alt="">';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div class="row">';
echo '<div class="img-holder">';
echo '<div class="bg"></div>';
echo '<div class="info-holder">';
echo '<img src="" alt="">';
echo '</div>';
echo '</div>';
echo '<div class="form-holder">';
echo '<div class="form-content">';
echo '<div class="form-items">';
echo '<h3>Sign In</h3>';
echo '<p>Log in your account to gain access to the vessel.</p>';
echo '<form method ="POST">';
                        if(isset($_REQUEST['notexist'])===true){
                        echo "<div class='alert alert-danger' role='alert'> Username doest not exist... </div>";
                        }
                        else if(isset($_REQUEST['wrongpass']) ===true){
                            echo "<div class='alert alert-warning' role='alert'> Incorrect Password... </div>";					
                        }
                        else if(isset($_REQUEST['success']) ===true){
                            echo "<div class='alert alert-success' role='alert'> Redirecting... </div>";	
                            header("Refresh: 5; url=home.php");			
                        }
                        else if(isset($_REQUEST['logout']) === true)
                        {
                            echo "<div class='alert alert-info' role='alert'> Thank you... </div>";	
                        }
                        echo '<input class="form-control" type="text" name="form_username" placeholder="E-mail Address" required>';
                        echo '<input class="form-control" type="password" name="form_password" placeholder="Password" required>';
                        echo '<div class="form-button">';
                        echo '<button id="submit" type="submit" class="ibtn" name="login_button">Login </button></a>';
                        echo '<span> </span><a href="forget.php">Forget password?</a>';
                        echo '</div>';
                        echo '</form>';
                        echo '';
                        echo '<div class="other-links">';
                        echo '<div class="text">Or login with</div>';
                        echo '<a href=""><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-twitter"></i>Twitter</a>';
                        echo '</div>';
                        echo '<div class="page-links">';
                        echo '<a href="register.php">Create New Account</a>';
                        echo '';
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