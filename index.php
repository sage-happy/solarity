<?php include('php/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signUp.css"/>
    <title>Solarity | Registration form</title>
</head>
<body>
    <div class="form-container">
        <form action="php/reg_user.php" method="post">
            <span id="title"><img src="image/logo.jpg" alt="Logo">Solarity</span>
            <div class="input-container">
                <label for="name">Username:</label><br>
                <input type="text" name="name" class="input" id="username" required><br>
            </div>

            <div class="input-container">
                <label for="email">Email:</label><br>
                <input type="email" name="email" class="input" id="email" required><br>
            </div>
            
            <div class="input-container">
                <label for="password">Password:</label><br>
                <input type="password" name="password" class="input" id="password1" required><br>
            </div>
            
            <div class="input-container">
                <label for="Re-enter password">Re-enter password:</label><br>
                <input type="password" name="passcmp" class="input" id="password2" required><br>
            </div>
            <input type="submit" name="signUp" value="Sign up" id="submit-btn">

            <div>
                <p>Already have an account? <a href="php/signin.php">Sign in</a></p>
                <a id="forgot_pass" href="#">forgot password?</a>
            </div>
            
        </form>
    </div>

</body>
</html>


