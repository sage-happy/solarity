<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css"/>
    <title>Solarity | Sign In</title>
</head>
<body>
    <div class="form-container">
        <form action="user_val.php" method="post">
            <span id="title">
                <div>Solarity</div>
                <img src="../image/logo.jpg" alt="Logo">
            </span>

            <div class="input-container">
                <label for="email">Email:</label><br>
                <input type="email" name="email" class="input" id="email" required><br>
            </div>
            
            <div class="input-container">
                <label for="password">Password:</label><br>
                <input type="password" name="password" class="input" id="password1" required><br>
            </div>
            
            <input type="submit" name="signin" value="Sign in" id="submit-btn">

            <div>
                <p>Already have an account? <a href="../index.php">Sign up</a></p>
                <a id="forgot_pass" href="#">forgot password?</a>
            </div>
            
        </form>
    </div>

</body>
</html>
