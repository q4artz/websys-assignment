<?php
include 'config.php';
       if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
         $email = mysqli_real_escape_string($conn,$_POST['email']);
         $password = md5($_POST['password']);
         $confirmpassword = md5($_POST['confirmpassword']);
         $user_type = $_POST['user_type'];
         
         $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";
         $result = mysqli_query($conn, $select);
         
         if(mysqli_num_rows($result) > 0){
             $error[] = 'user already exist?';
         }
         else{
             if($password != $confirmpassword){
                 $error[] = 'password does not match';
             }else{
                 $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$password','$user_type')";
                 mysqli_query($conn,$insert);
                 header('location:login_form.php');
             }
         }
       }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="form-container">
            <form action="" method="post">
                <h3>Register Now!</h3>
                <?php
                if(isset($error)){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
                ?>
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
