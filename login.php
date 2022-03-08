<?php
require_once('config.php');
if (isset($_POST)){
$email= $_POST['email'];
$password= $_POST['password'];

$sql="SELECT hashed_pass, email FROM KASUTAJAD WHERE email=?";


    $stmtinsert=$db->prepare($sql);

$result= $stmtinsert->execute([$email]);

if ($result){
    echo "success";
}else {
    echo "error";
}
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
                <input class="form-control" id="email"  type="email" name="email" required value="<?php echo $email; ?>">


                <label for="password"><b>Password</b></label>
                <input class="form-control" id="password"  type="password" name="password" value="<?php echo $password; ?>" required>

                <input class="btn btn-primary" type="submit" id="register" name="signup" value="Sign Up">
            </div>
        </div>
    </div>
</form>
</body>
</html>
