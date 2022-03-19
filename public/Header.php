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
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          CheatSheet
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/BlogWeb/cheatsheet.php">HTML CheatSheet</a></li>
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
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#"></a></li>
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
          <a class="nav-link" href="/BlogWeb/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/BlogWeb/contact.php">Contact Us</a>
        </li>
      </ul>
      <div class="row mx-2">';

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  {
        echo ' <form class="d-flex">
        ';
      
       echo '<p class="text-light my-1 mx-3">'.$_SESSION['useremail']. '</p>
      <a href="public/logout.php" type="button" class="btn btn-outline-danger me-2" >
      Logout
    </a>
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
else if (isset($_GET['signupsuccess']) && ($_GET['signupsuccess']=="false")){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>SignUp Faild </strong> Already Use Email
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>