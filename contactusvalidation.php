<?php 
    include 'config.php';
?>

<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $contact = $_GET['contact'];
    $msg = $_GET['msg'];

    $sql = "INSERT INTO contactus (Name , email , contact , msg ) VALUES ('$name' , '$email' , '$contact' , '$msg')";

    if(mysqli_query($conn , $sql))
    {
        header("Location:contactusdisplay.php?status=passed");
    }
    else
    {
        header("Location:contactus.php?status=failed");
    }

?>