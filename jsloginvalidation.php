<?php
    include_once'config.php';
?>


<?php
$email = $_POST['jsemail'];
$password = $_POST['jspassword'];

$email = stripslashes($email);
$password = stripslashes($password);

$sql = mysqli_query($conn , "SELECT * FROM job_seeker WHERE Email = '$email' AND password = '$password'");

//$sql = "SELECT * FROM comp WHERE username = '$username' AND password = '$password'";

//$result = $conn->query($sql);

$row  = mysqli_fetch_array($sql);

if ($password == $row['password'])
{
    session_start();
    $_SESSION['id'] = $row['ID'];
    /*$_SESSION['uname'] = $row['username'];
    $_SESSION['password'] = $row['password'];*/
    $_SESSION['role'] = 'js';
    header("Location:jsdashprofile.php?loggedin");
     
}
else{
    header("Location:login.php?failed");
}




$conn -> close();

?>