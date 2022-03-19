<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- -------------------Header And DataBase Connection----------------------------------- -->
  <?php
      include 'public/Header.php';
     
  ?>
  <!-- ------------------------Section Contact Us PHP------------------------------------------------ -->
  <?php
 include 'public/DBConnect.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $name = $_POST["ContactName"];
  $email=$_POST['ContactEmail'];
  $pass=$_POST['ContactPassword'];
  $comment=$_POST['ContactComment'];
  $query="INSERT INTO `contacttbl` (`Name`, `Email`, `UserPassword`, `Comment`) VALUES ('$name', '$email', '$pass', '$comment');";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Successfull Submited</strong> Thankyou 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  else {
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Your form Submited Faild</strong> The record was not insered successfully bacouse your error ---->' .mysqli_error($conn);
  '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
    }
?>
<!-- ------------------------Section Contact Us------------------------------------------------ -->
  <div class="container center my-4">
    <h1 class="text-center my-3">Contact Us </h1>
<form action="contact.php" method="post">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" name="ContactName" id="name" require>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control"name="ContactEmail" id="email"require >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="ContactPassword" id="password"require >
  </div>
  <div class="mb-3">
    <label for="Name" class="form-label">Comment</label>
    <textarea name="ContactComment" class="form-control" id="name" id="" cols="30" rows="4"require></textarea>
    
  </div>
  <button type="submit" value="insert" class="btn btn-primary">Submit</button>
</form>
</div >
<!-- ---------------------------------------------------------------------------------- -->

<!-- -----------------------------footer------------------------------------------ -->
<?php
include 'public/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>