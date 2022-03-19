<?php
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'DBConnect.php';
    $UserEmail=$_POST['LoginEmail'];
    $pass=$_POST['LoginPassword'];

    $query= "SELECT * FROM `users` WHERE UserEmail='$UserEmail'";
    $result = mysqli_query($conn,$query);
    $numRows = mysqli_num_rows($result);
    if ($numRows==1)
    {
                       $row = mysqli_fetch_assoc($result);
                       if (password_verify($pass,$row['UserPassword']))
                {
                   
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['useremail'] = $UserEmail;
                        echo "<script>alert('You are Login');
                        window.location.href='/BlogWeb/index.php';
                        </script>";
                }else{
                echo "<script>alert('You are Not Login Please Check Your Password');
                window.location.href='/BlogWeb/index.php';
                </script>";
            }
                
    }
    else{
        echo "<script>alert('You are Not Login Please Check Your Email');
        window.location.href='/BlogWeb/index.php';
        </script>";
    }
   
}
?>