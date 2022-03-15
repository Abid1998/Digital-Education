<?php
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'DBConnect.php';
    $email=$_POST['LoginEmail'];
    $pass=$_POST['LoginPassword'];

    // $query= "SELECT * FROM `users` WHERE UserEmail='$email'";
    $sql= "SELECT * FROM users WHERE (UserEmail='$email') AND (UserPassword='$pass')";
    
    $result = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows==1){

                    $login=true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['useremail'] = $email;
                    header("Location: /BlogWeb/index.php");

                    //    $row = mysqli_fetch_assoc($result);
                    //    if (password_verify($pass,$row['Password'])){
                   
                    //     session_start();
                    //     $_SESSION['loggedin'] = true;
                    //     $_SESSION['useremail'] = $email;
                    //     echo "login In ".$email;
                }
                    // header("Location: /BlogWeb/index.php");
               else {
                        echo 'Faild';
                    } 
    
}
?>