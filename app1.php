<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App1</title>
    <link rel="stylesheet" href="app1.css">
    <!-- link to outside opensource free icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="app1.js" type="text/javascript" defer></script>
</head>

<body id="front_page">
    <!-- using labels for technique to activate input above by cliking on the elements inside the label -->

    <input type="checkbox" id="nav_bar_check">
    <label for="nav_bar_check" id="nav_bar">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </label>
    <form id="sign_in" action="" method="GET">
        <input type="text" name="username/email_signin" id="" placeholder="username,email or phone">
        <div>
            <input type="password" name="password" id="password1" placeholder="password">
            <span onclick="eye_function(1)" id="eyes1">
                <i class="fa fa-eye" id="eye_open1"></i>
                <i class="fa fa-eye-slash" id="eye_slash1"></i>
            </span>
        </div>
        <label for="remember_me">
            <input type="checkbox" id="remember_me"> remember me
        </label>
        <input type="submit" value="Sign In">
        <a id="forgot_pw" href="">forgot password?</a>
    </form>
    <form id="sign_up" action="" method="GET">
        <input type="text" name="username/email_signup" id="" placeholder="username,email or phone">
        <div id="eye_pw_box">
            <input type="password" name="newpassword" id="password2" placeholder="password">
            <span onclick="eye_function(2)" id="eyes2">
                <i class="fa fa-eye" id="eye_open2"></i>
                <i class="fa fa-eye-slash" id="eye_slash2"></i>
            </span>
        </div>
        <input type="password" name="retype password" id="" placeholder="re-enter password">
        <input type="submit" value="Sign Up">
    </form>

    <nav id="navigation">
        <a href="contact_card.php" class="nav_sub">Contact Us</a>
        <a href="" class="nav_sub">Why Us?</a>
        <a href="" class="nav_sub">Donate!</a>
    </nav>


</body>

</html>