<?php
include "config.php";

if(isset($_POST['save'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn,
"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

header("Location: users.php");
}
?>

<form method="POST">
<input name="name" placeholder="Name">
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button name="save">Save</button>
</form>