<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <head>
        <title>Login - Take My Tickets</title>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" href="tmt.png" sizes="16*16">
    </head>
    <body> 
            <h1>Take My Tickets Portal</h1><br>
            <h2>Log in to your account</h2>


            <form action="login.php" method="post">
                <div class="form">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your email" id="email" value="email" name="password">
                    <br>
                    <label for="password">Password</label>
                    <input type="password"id="password" value="password" name="password">
                    <br>
                    <input type="submit" value="Sign in" class="button" name="signin_btn">
                    <!-- <div class="button">
                    <a href="#">Sign in</a>
                    </div> -->
                </div>
            </form>
    </body>
</html>
<!-- <?php
$conn=mysqli_connect("localhost", "root", "");
if(isset($POST['signin_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM websitesignin.signindetails WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $resultPassword=$row['password'];
        if($password==$resultPassword){
            header('Location:index.html');
        }else{
            echo"<script>
                alert('Login unsuccessful');
                </script>";
        }
        }
    } -->