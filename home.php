<?php
session_start();
if (isset($_POST['register_btn'])){
    $_SESSION["username"] =  $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
}
print_r($_SESSION);

if(isset($_POST['sign_in'])){
    var_dump($_POST['password_login'] == $_SESSION['password']);
    // if($_POST['password_login'] == $_SESSION['username']){
    //     header('location: safe.php');
    // }

}

?>
<html>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="register">
            <h2>Register</h2>
            <form  method="POST">
                <table>
                    <tr>
                        Username: 
                        <input type="text" name="username"><br>
                    </tr>
                    <tr>
                        Password:
                        <input type="text" name="password"><br>
                    </tr>
                    <tr>
                        <button type="submit" name="register_btn" >Sign up</button>
                    </tr>
                </table>
            </form>
    </div>
    <div class="login">
            <h2>Sign in</h2>
            <form action="safe.php" method="POST">
            <table>
                <tr>
                    Username: 
                    <input type="text" name="username_login"><br>
                </tr>
                <tr>
                    Password: 
                    <input type="text" name="password_login"><br>
                </tr>
                <tr>
                    <button type="submit" name="sign_in">Sign in</button>
                </tr>
            </table>
            </form>
    </div>
</div>
</html>