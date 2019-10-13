<?php
?>
​
<html>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');
    @import url('https://fonts.googleapis.com/css?family=Orbitron&display=swap');
    body {
        font-family: "Poppins", sans-serif;
        height: 100vh;
        background : blue;
        background-size: 50%;
    }

    a {
        display:inline-block;
        text-decoration: none;
        font-weight: 400;
    }
    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display:inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }

    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        background: black;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        box-shadow: 0 45px 60px 0 rgba(0,0,0,0.3);
        text-align: center;
    }
    h2.inactive {
        color: yellow;
        font-family: 'Orbitron', sans-serif;

    }
    h2.active {
        color: deeppink;
        border-bottom: 2px solid greenyellow;
        font-family: 'Orbitron', sans-serif;
    }
    input[type=submit] {
        background-color: blue;
        border: none;
        color: black;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        border: 2px solid greenyellow;
        width: 85%;
    }
    nput[type=submit]:hover {
        background-color: blue;
    }
    input[type=text], input[input=submit]{
        background-color: blue;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid greenyellow;
    }
    input[type=password] {
        background-color: blue;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid greenyellow;
    }
    input[type=text]:focus {
        background-color: blue;
        border-bottom: 3px solid yellowgreen;
    }
    ​</style>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active"> Sign In </h2>
        <a href="signup.php"><h2 class="inactive underlineHover">Sign Up</h2></a>
        ​
        <div class="fadeIn first">
            <img style="width: 377px; border-radius: 5px 5px 5px 5px;" src="resources/profile.png" id="icon" alt="User Icon" />
        </div>
        ​
        <form method="post" action="login.php">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="passwd" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="LogIn">
        </form>
    </div>
</div>
</html>