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
<style>
#qsn {
    min-height: 440px;
}
</style>

<body>
    <!-- ----------------------------------Header-Navbar--------------------------------- -->
    <?php include'public/Header.php';?>
    <?php include 'public/DBConnect.php';?>
    <!-- ----------------------------------------Section-Courses----------------------------------------------- -->
    <?php
    $id=$_GET['courseId'];
    $sql= "SELECT * FROM `courses` WHERE Id=$id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $CourseName=$row["CourseName"];
        $desc=$row['Descraption'];
    }
    ?>
    <div class="container">
        <div class="p-1 my-5 mb-5 bg-light rounded-3">
            <div class="container py-5">
                <h1 class="display-7 fw-bold">Welcome to <?php echo $CourseName ?></h1>
                <p class="col-md-10 fs-7"><?php echo $desc?><br>
                    <button class="btn btn-outline-primary btn my-3" type="button">Learn more</button>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------Section Question--------------------------------------------- -->
    <div class="container col-md-10">
  <form>
                    <div class="mb-3">
                        <h3><label class="form-label">Question Title</label></h3>
                        <input type="text" name="" class="form-control"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                       <h3> <label  class="form-label">Question ?</label></h3>
                        <input type="text" class="form-control"  aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>
    </div>

    <div class="container py-2" id="qsn">
        <h1>Questions</h1>
        <?php
      $id=$_GET['courseId'];
      $query ="select * from `quesrions` WHERE QId = $id";
      $result = mysqli_query($conn,$query);
      $noResult=true;
      while ($row=mysqli_fetch_assoc($result)) {
      $noResult=false;
       
        $id =$row['QId'];
        $title=$row['QTitle'];
        $desc1=$row['QDesc'];
      }
      if ($noResult) {
        //   echo var_dump($noResult);
          
          echo '<div class="p-5 my-4 mb-5 bg-light rounded-3">
          <div class="media-body px-5 mx-5">
              <h1 class="mt-0 display-7 fw-bold">No Result Found</h1>
              <strong>Be The First Person To aks a question </strong>
              </div>
              </div>';
     
      }else{
      echo '<div class="media my-3">
      <img src="img/big1.jpg" width="60px" class="mr-3" alt="logo">
      <div class="media-body px-5 mx-5">
          <h5 class="mt-0"><a href="Questions.php?Qsnid='. $id .' " class="text-dark">'. $title .'</a></h5>
          '. $desc1 .'     
          </div>
          </div>';
        }
     
    ?>


















    </div>

    <!-- --------------------------------------------Footer----------------------------------------- -->
    <div>
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