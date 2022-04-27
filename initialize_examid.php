<?php


$host = 'localhost';
$user = 'root';
$password = '';
$conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");


session_start();

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Exam</title>
  <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet" />
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet" />
  <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
  <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
  <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet" />
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/lib/helper.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // extract exam id now
    $tid = $_SESSION['t_id'];

    $title = $_POST['title'];
    $total = $_POST['total'];
    $sub = $_POST['sub'];

    $time = date("h-i-s",time());


    $query = "INSERT INTO exam_detail(examid, title, teacher, subject, totalmarks, time, date) VALUES (NULL, '$title', '$tid', '$sub', '$total', '$time', current_timestamp());";

    mysqli_query($conn, $query);


    $getQuery = "SELECT examid from exam_detail where teacher='$tid' order by examid DESC limit 1";
    $extracted = mysqli_query($conn, $getQuery);
    if ($query) {
      $row = mysqli_fetch_array($extracted);

      $_SESSION['exam_id'] = $row['examid'];
      $_SESSION['q_id'] = 0;




      echo "<script>window.open('create_exam.php','_self')</script>";
    }
  }
  // echo "<h1>$tid</h1>";

  ?>

  <h1>Enter Exam Details</h1>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Enter Exam Details
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Enter Question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            Enter Title: <input type="text" name='title' required style="text-transform:uppercase; border:2px;border-color:blueviolet"> <br> <br>
            Enter Subject Name: <input type="text" name='sub' required style="text-transform:uppercase;border:2px;border-color:blueviolet"> <br> <br>
            Total Marks? <input type="text" name='total' style="text-transform:uppercase;border:2px; border-color:blueviolet;" required> <br><br>

            <input type="submit" value="Submit">
          </form>
        </div>

      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>