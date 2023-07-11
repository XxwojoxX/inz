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
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Firstname</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input required="" placeholder="" type="email" class="input">
            <span>Email</span>
        </label> 
            
        <label>
            <input required="" placeholder="" type="password" class="input">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input">
            <span>Confirm password</span>
        </label>
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="login.html">Signin</a> </p>
    </form>
</body>
</html>