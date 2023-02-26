<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="form-container">
            <form action="" method="post">
                <h3>Login Now!</h3>
                <input type="text" name="name" required placeholder="Enter Your Name">
                <br>
                <input type="password" name="password" required placeholder="Enter Your Password">
                <br>    
                <select name="user_type">
                    <option value="user">user</option>
                    <option value-="admin">admin</option>
                </select>
                <br>
                <input type="submit" name="submit" value="register now" class="form-btn">
                <br>
                <p>Don't Have an Account? <a href="register_form.php">Register Now</a></p>
            </form>
        </div>
    </body>
</html>
