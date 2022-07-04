<?php
    include_once'config.php';
?>

<?php
$email = $_POST['cmpemail'];
$password = $_POST['cmppass'];

$email = stripslashes($email);
$password = stripslashes($password);

$sql = mysqli_query($conn , "SELECT * FROM employee WHERE Email = '$email' AND password = '$password'");

//$sql = "SELECT * FROM comp WHERE username = '$username' AND password = '$password'";

//$result = $conn->query($sql);

$row  = mysqli_fetch_array($sql);

if ($password == $row['password'])
{
    session_start();
    $_SESSION['id'] = $row['ID'];
    $_SESSION['uname'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role'] = 'emp';
    header("Location:empdashprofile.php");
     
}
else{
    header("Location:cmlogin.php?failed");
}


$conn -> close();

?>