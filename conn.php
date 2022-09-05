<?php 
    $conn = mysqli_connect('localhost','root','','pharma');
    
    if (! $conn) {
        die(mysqli_error($conn));
    }
?>
