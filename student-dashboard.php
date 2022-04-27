<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Focus Admin: Creative Admin Dashboard</title>
  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff" />
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff" />
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff" />
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff" />
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff" />
  <!-- Styles -->
  <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet" />
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
  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <ul>
          <div class="logo"><a href="index.html">
              <!-- <img src="assets/images/logo.png" alt="" /> -->
              <span>
                <label style="color:#ffffff;font-size: 36px; font-weight: 600;text-transform: none;">ex</label>
                <label style="color:#ffffff;font-size: 36px;font-weight: 300; text-transform: none;">Port</label>
              </span>
            </a></div>



          <li><a style="color: #ffffff;"><i class="ti-home"></i> Dashboard </a></li>
          <li><a href="exam-portal.html" style="color: #ffffff;"><i class="ti-notepad"></i> Exam Portal </a></li>



          <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
              <li><a href="student-login.html">Student Login</a></li>
              <li><a href="student-signup.html">Student Sign Up</a></li>
              <li><a href="teacher-login.html">Teacher Login</a></li>
              <li><a href="teacher-signup.html">Teacher Sign Up</a></li>
            </ul>
          </li>
          <li><a><i class="ti-close"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->

  <div class="header" style="height: 80px;background-color: #E8EEF6">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left">
            <div class="hamburger sidebar-toggle" style="margin-top: 10px;">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          
        </div>
        <!-- /# row -->
        <section id="main-content ">
          <div class="row" id="tabs">
            <div class="col-lg-12">
              <div class="m-10 text-lg text-gray-500 font-semibold">
                <div class="flex gap-10">
                  <button id="tab_ongoing" class="font-bold text-black border-b-4 border-blue-500 px-2" onclick="changetab(event)">Choose your Exam</button>
                  <!-- <button id="tab_previous"   onclick="changetab(event)">Previous Exams</button> -->
                </div>
                <hr class="">
                <div>
                </div>
              </div>
              <!-- on going -->
              <?php

              $host = 'localhost';
              $user = 'root';
              $password = '';
              $conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");



              $query = "select * from exam_detail order by date desc";
              $extracted = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($extracted)) {

              ?>
                <form action="give_exam.php" method="post">
                  Exam ID : <input type="text" name='exam_id' value="<?= $row['examid']; ?>" hidden> <?= $row['examid']; ?> <br>
                  Title : <input type="text" name="title" value="<?= $row['title']; ?>" hidden> <?= $row['title']; ?> <br>
                  Subject : <input type="text" name="subject" value="<?= $row['subject']; ?>" hidden> <?= $row['subject']; ?> <br>
                  Total Marks : <input type="text" name="totalmarks" value="<?= $row['totalmarks']; ?>" hidden> <?= $row['totalmarks']; ?> <br>
                  Date : <input type="text" name="date" value="<?= $row['date']; ?>" hidden> <?= $row['date']; ?> <br>
                  <input type="submit" name='submit' value='Click Here'>
                </form>
              <?php } ?>
              




            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- jquery vendor -->
  <script src="assets/js/lib/jquery.min.js"></script>
  <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
  <!-- nano scroller -->
  <script src="assets/js/lib/menubar/sidebar.js"></script>
  <script src="assets/js/lib/preloader/pace.min.js"></script>
  <!-- sidebar -->

  <script src="assets/js/lib/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!-- bootstrap -->

  <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
  <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
  <script src="assets/js/lib/calendar-2/pignose.init.js"></script>

  <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
  <script src="assets/js/lib/weather/weather-init.js"></script>
  <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
  <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
  <script src="assets/js/lib/chartist/chartist.min.js"></script>
  <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
  <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
  <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
  <!-- scripit init-->
  <script src="assets/js/dashboard2.js"></script>
  <script>
    const changetab = (e) => {
      id = e.target.id;
      let tab1, tab2, content1, content2
      if (id == "tab_previous") {
        tab1 = document.getElementById("tab_previous")
        content1 = document.getElementById("content_previous")
        tab2 = document.getElementById("tab_ongoing")
        content2 = document.getElementById("content_ongoing")
      }
      if (id == "tab_ongoing") {
        tab1 = document.getElementById("tab_ongoing")
        content1 = document.getElementById("content_ongoing")
        tab2 = document.getElementById("tab_previous")
        content2 = document.getElementById("content_previous")
      }
      tab1.classList = "font-bold text-black border-b-4 border-blue-500 px-2"
      tab2.classList = ""
      content1.classList = "block"
      content2.classList = "hidden"
    }
  </script>
</body>

</html>