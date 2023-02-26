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
                <h3>Register Now!</h3>
                <input type="text" name="name" required placeholder="Enter Your Name">
                <br>
                <input type="email" name="email" required placeholder="Enter Your Email">
                <br>
                <input type="password" name="password" required placeholder="Enter Your Password">
                <br>    
                <input type="password" name="confirmpassword" required placeholder="Enter Your Password Again">
                <br>
                <select name="user_type">
                    <option value="user">user</option>
                    <option value-="admin">admin</option>
                </select>
                <br>
                <input type="submit" name="submit" value="register now" class="form-btn">
                <br>
                <p>Already Have an Account? <a href="login_form.php">Login In Now</a></p>
            </form>
        </div>
    </body>
</html>
