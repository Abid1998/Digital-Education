<?php

$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'DBConnect.php';
    $UserEmail=$_POST["signupEmail"];
    $Password=$_POST["signupPassword"];
    $CPassword=$_POST["signupCPassword"];

    //Check Whether this Email Exists
    $query= "SELECT * FROM `users` WHERE UserEmail='$UserEmail'";
    
    $result = mysqli_query($conn,$query);
    $numRows = mysqli_num_rows($result);
    if ($numRows>0) {
       $showError ="Email already in Use";
    }
    else {
        if ($Password==$CPassword) {
            $hash = password_hash($Password,PASSWORD_DEFAULT);
            
            $sql= "INSERT INTO `users` (`UserEmail`, `UserPassword`, `TampDate`) VALUES ('$UserEmail', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            echo $result;
             if ($result) {
                $showAlert=true;
                header("Location: /BlogWeb/index.php?signupsuccess=true"); //redairect Home Page
                exit();

            }else {
                        $showError ="Password Do not match";
                 }
        }
    }
    header("Location: /BlogWeb/index.php?signupsuccess=false&error=$showError"); 
}

?>