<?php
include_once 'config.php';
if (isset($_POST)){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql= mysqli_query($conn,"SELECT password, email FROM KASUTAJAD WHERE email='" . $_POST['email'] . "'");



    $row = mysqli_fetch_array($sql);
    $hashed_pass= $row["password"];
    if (password_verify($password, $hashed_pass)): {
        echo "success";
    }else: {
        echo "error ";
    }
    endif;
}



?>
<!DOCTYPE html>
<html>
<body>
<form action="login.php" method="post">
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

