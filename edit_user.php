<?php
include "config.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if(isset($_POST['update'])){
$name = $_POST['name'];
$email = $_POST['email'];

mysqli_query($conn,
"UPDATE users SET name='$name',email='$email'
WHERE id=$id");

header("Location: users.php");
}

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
<input name="name" value="<?php echo $row['name']; ?>">
<input name="email" value="<?php echo $row['email']; ?>">
<button name="update">Update</button>
</form>