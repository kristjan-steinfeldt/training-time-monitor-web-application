<?php
include_once 'config.php';
if (isset($_POST["signup"])){
    $email= $_POST['email'];
    $password= $_POST['password'];
    $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    $sql= mysqli_query($conn,"INSERT INTO KASUTAJAD (password, email)  VALUES ($hashed_pass, '$email') ");


    if (mysqli_query($conn, $sql)): {
        echo "user created";
    }else: {
        echo "error user not created";
    }
    endif;
}

?>
<!DOCTYPE html>
<html>
<body>
<form action="signup.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>Registration</h1>
                <p>Fill up the form with correct values.</p>
                <label for="email"><b>Email Address</b></label>
                <input class="form-control" id="email"  type="email" name="email" required>


                <label for="password"><b>Password</b></label>
                <input class="form-control" id="password"  type="password" name="password" required>

                <input class="btn btn-primary" type="submit" id="register" name="signup" value="Sign Up">
            </div>
        </div>
    </div>
</form>
</body>
</html>
