<?php
include "config.php";

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<h2>Users</h2>
<a href="add_user.php">Add User</a>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td>
<a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php } ?>
</table>