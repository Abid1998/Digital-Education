<?php

session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Education Hare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Programing Language</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">C Language</a></li>
            <li><a class="dropdown-item" href="#">C++</a></li>
            <li><a class="dropdown-item" href="#">Java</a></li>
            <li><a class="dropdown-item" href="#">.Net</a></li>
            <li><a class="dropdown-item" href="#">PHP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Front End Language</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">HTML5</a></li>
            <li><a class="dropdown-item" href="#">Css3</a></li>
            <li><a class="dropdown-item" href="#">JavaScript</a></li>
            <li><a class="dropdown-item" href="#">React</a></li>
            <li><a class="dropdown-item" href="#">Angular</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <div class="row mx-2">';
      if (isset($_SESSION['loggedin']) AND $_SESSION['loggedin']==true)  {
  
        echo ' <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-3" type="submit">Search</button>
       <p class="text-light"> '.$_SESSION['UserEmail']. '</p>
      <button type="button" class="btn btn-outline-danger me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
      Logout
    </button>
      </form>';
      }else {
        echo ' <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-3" type="submit">Search</button>
        <button type="button" class="btn btn-outline-danger me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
          Login
        </button>
        <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signupmodal">
          SignUp
        </button>
       </form>
    </div>';
      }
     
  echo '</div>
  </div>
</nav>';
include 'public/loginmodal.php';
include 'public/signupmodal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Successfull SignUp</strong> You can Login Now!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>