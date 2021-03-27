<?php
include ('connect.php');
?>
<html>
<head></head>
<body>
<form method="POST" action="">
Name<input type="text" name="username"></br>
Email <input type="text" name="email"></br>
Password<input type="text" name="password"></br>
Gender<input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">female   
      <input type="submit" value="save" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO student (username, email, password, gender) VALUES ('$username', '$email', '$password', '$gender')";
    $exe = mysqli_query($conn, $sql);
    if($exe)
    {
        header('location:display.php');
    }
    else{
        echo "error";
    }
}
?>