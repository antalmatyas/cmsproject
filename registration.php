<?php  include "includes/connect.php"; ?>
 <?php  include "includes/header.php"; ?>


    <!-- Navigation -->
    <?php  include "includes/navigation.php"; ?>
    <!-- Page Content -->

<?php
    $message = "";
    global $connection;
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = mysqli_real_escape_string($connection, $username);
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($connection, $email);
        $password = $_POST['password'];
        $password = mysqli_real_escape_string($connection, $password);
        
        if(!empty($username) && !empty($password) && !empty($email)){
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
            $newuser_query = "INSERT INTO users (user_name, user_email, user_password) ";
            $newuser_query .= "VALUES('{$username}', '{$email}', '{$password}');";
            $create = mysqli_query($connection, $newuser_query);
            if(!$create){
                die("Query failed: " . mysqli_error($connection));
            }
        }
        else{
            $message = "Please fill out all fields!";
        }
        

        
    }
?>

<div class="container">    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <h6><?php echo $message; ?><h6>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> 
        </div>
    </div>
</section>


        <hr>



<?php include "includes/footer.php";?>
