<?php
include "config.php";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password,$user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="POST">
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>