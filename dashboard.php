<?php
include "config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<h2>Dashboard</h2>

<a href="users.php">Manage Users</a>
<a href="logout.php">Logout</a>