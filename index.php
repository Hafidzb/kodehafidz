<!DOCTYPE html> 
<html lang="en"> 
    <?php
       
       session_start();
       
       if (isset($_SESSION['username'])) 
        {
           header("Location: main.html");
           exit();
        }
    ?>
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login</title> 
        <link rel="stylesheet" href="style.css"> 
        <link href="assets/img/favicon2.png" rel="icon">
</head> 
<body> 
<div class="background-container">
    <div class="login-container"> 
        <h2>Login</h2> 
        <form action="proses_login.php" method="post" id="login-form"> 
            <div class="input-group"> 
                <label for="username">Username</label> 
                <input type="text" name="username" id="username" required> 
            </div> 
            <div class="input-group"> 
                <label for="password">Password</label> 
                <input type="password" name="password" id="password" required> 
            </div> 
            <div id="input-btn"> 
                    <button type="submit">Login</button> 
            </div> 
        </form> 
    </div> 
</div>
<script src="script.js"></script>