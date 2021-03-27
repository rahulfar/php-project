<?php
include ('connect.php');
?>
<html>
<head></head>
<body>
<table>
<tr>
<td>Name</td>
<td>Email</td>
<td>Password</td>
<td>Gender</td>
</tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM student");
while ($total = mysqli_fetch_array($result));
{
    ?>
    <tr>
    <td> <?php echo $total['username']; ?></td>
    <td> <?php echo $total['email']; ?></td>
    <td> <?php echo $total['password']; ?></td>
    <td> <?php echo $total['gender']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>