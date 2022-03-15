<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    
</head>

<body>
    <!-- ----------------------------------Header-Navbar--------------------------------- -->
    <?php include'public/Header.php';?>
    <?php include 'public/DBConnect.php';?>
    <!-- ----------------------------------------Section-slide----------------------------------------------- -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/architecture-g845330723_1920.jpg" class="d-block w-100" width="100" height="500vh"
                    alt="image">
            </div>
            <div class="carousel-item">
                <img src="img/study-g28cf2c700_1920.jpg" class="d-block w-100" width="100" height="500" alt="image">
            </div>
            <div class="carousel-item">
                <img src="img/code-g64cceed13_1920.jpg" class="d-block w-100" width="100" height="500" alt="image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- --------------------------------------Courses-------------------------------------------------- -->
    <div class="container my-3">
        <div class="text-center my-2">
            <h1>Courses</h1>
        </div>
        <!-- ------------------------------------Cards----------------------------------------------------------------- -->
        <div class="row my-5">

            <!-- fatch all the Course -->
              <!-- use a loop to Course Card -->
          <?php
          $sql = "SELECT * FROM `courses`";
          $result= mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($result)){
            $course= $row['CourseName'];
            $desc= $row['Descraption'];
            $id=$row['Id'];
              // echo $row['Id'];
              echo "<div class='col-md-4 my-2'>
              <div class='card' style='width: 18rem;'>
                  <img src='https://source.unsplash.com/500x300/? . $course. coding, technology ' class='card-img-top' alt='image'>
                  <div class='card-body'>
                      <h5 class='card-title'><a href='course.php?courseId=".$id." '>$course</a></h5>
                      <p class='Text-center'>".substr($desc ,0 ,80)."...</p>
                      <a href='course.php?courseId=".$id."' class='btn btn-outline-danger'>Enroll Now</a>
                  </div>
              </div>
          </div>";

          }
          ?>
        </div>
      </div >
           


          
    <!-- --------------------------------------------Footer----------------------------------------- -->
    <div >
    <?php
      include 'public/footer.php';
  ?>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>