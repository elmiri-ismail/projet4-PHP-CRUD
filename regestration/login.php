<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>regester php mysql</title>
</head>
<body>
    <div class="header">
        <h2>
            Login in
        </h2>
    </div>
    <form method="post" action="login.php">
         <!--display validation errors here -->
         <?php include('errors.php'); ?>
        <div class="input-group">
            <label >Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label >Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
         <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
        Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>