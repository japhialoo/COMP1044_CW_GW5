<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "piñoylibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['delete_button'])){
    $mid = $_GET['mid']; //member ID entered in SearchMem.php

    $sql = "DELETE FROM member WHERE MemberID = '$mid'";
    $result = $conn->query($sql);

    if ($result === TRUE){
        header("location: SearchMem.php?delete=deleteComplete");
        exit();
    }
    else {
        header("location: SearchMem.php?error=DeleteSqlFailed");
        exit();
    } 
}
?>