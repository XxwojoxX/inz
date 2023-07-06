<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/media.css">
    <title>Document</title>
</head>
<body>
    <form class="form">
        <p class="title">Login </p>
        <p class="message">Log in and get full access to our app. </p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="login">
                <span>username</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="text" class="haslo">
                <span>password</span>
            </label>
        </div>  
                
        <label>
            <input required="" placeholder="" type="email" class="email">
            <span>Email</span>
        </label> 

        <button class="submit">Submit</button>
        <p class="signin">Forgot your password ? <a href="login.html">Signin</a> </p>
    </form>
</body>
</html>