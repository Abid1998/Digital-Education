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
    <?php include 'public/Header.php';
    include 'public/DBConnect.php';?>
    <!-- ----------------------------------------Section-Courses----------------------------------------------- -->
    <?php
    $id=$_GET['Qsnid'];
    $sql= "SELECT * FROM `quesrions` WHERE QId=$id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $title=$row["QTitle"];
        $desc2=$row['QDesc'];
    }
    ?>
    <div class="container">
        <div class="p-1 my-5 mb-5 bg-light rounded-3">
            <div class="container py-5">
                <h1 class="display-7 fw-bold"> <?php echo $title ?></h1>
                <p class="col-md-10 fs-7"><?php echo $desc2 ?><br>
                <hr>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente nisi quidem aliquid, repellat reprehenderit et inventore aliquam veniam animi quo debitis totam adipisci, qui voluptatibus. Eaque impedit soluta illum error!
                  <p>Posted By: <strong> Abid</strong></p>
            </div>
        </div>
    </div>
    <!-- ----------------------------------Section Question--------------------------------------------- -->
    <div class="container" id="qsn">
      <h1>  Discussions</h1>
    </div>
    <!-- <div class="container py-2" id="qsn">
        <h1>Questions</h1>
        <div class="media my-3">
            <img src="img/big1.jpg" width="60px" class="mr-3" alt="logo">
            <div class="media-body px-5 mx-5">
                <h5 class="mt-0">Mohammad Abid</h5>
                how to Install compairar Please tell me now Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                amet cumque tempore earum? Enim alias quidem, tempora exercitationem maiores in sint iure. Velit sequi
                ratione dolorem maxime aliquid impedit praesentium?
            </div>
        </div>

    </div> -->

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