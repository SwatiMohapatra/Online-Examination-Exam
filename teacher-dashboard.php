

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
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="http://placehold.it/144.png/000/fff"
    />
    <!-- Retina iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="http://placehold.it/114.png/000/fff"
    />
    <!-- Standard iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="http://placehold.it/72.png/000/fff"
    />
    <!-- Standard iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="http://placehold.it/57.png/000/fff"
    />
    <!-- Styles -->
    <link
      href="assets/css/lib/calendar2/pignose.calendar.min.css"
      rel="stylesheet"
    />
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
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures" style="min-height: 100vh;">
      <div class="nano">
          <div class="nano-content">
              <ul>
                  <div class="logo"><a href="index.html"> <!--need to change this-->
                          
                  <span>
                      <label style="color:#ffffff;font-size: 36px; font-weight: 600;text-transform: none;">ex</label>
                      <label style="color:#130909;font-size: 36px;font-weight: 300; text-transform: none;">Port</label>
                  </span>
                   </a></div>
                 
                  <li ><a href="teacher-dashboard.php" style="color: #ffffff;"><i class="ti-home"></i> Dashboard </a></li>
                  <li><a href="initialize_examid.php" style="color: #ffffff;"><i class="ti-notepad"></i> Create Exam </a></li>
                  <li><a href="examlog.php" style="color: #ffffff;"><i class="ti-archive"></i> Exam Logs </a></li>
                  <li><a href="alerts.html" style="color: #ffffff;"><i class="ti-alert"></i> Alerts </a></li>
                  
<?php 
        $host = 'localhost';  
        $user = 'root';  
        $password = '';  
        $conn = mysqli_connect($host, $user, $password,'fyp') or die("connection failed"); 
        session_start(); 
        // echo $_SESSION['flag'];
        if(!isset($_SESSION['flag'])){
          // header("location: teacher-login.php");
          echo "<script>window.open('teacher-login.php','_self')</script>";
        }

     
        

        $tid = $_SESSION['t_id'];
        $query = "select * from exam_detail where teacher='$tid'";
        $extracted = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($extracted)){
            
           ?>
           <form action="backend.php">
            Title : <?= $row['title']; ?> <br>
            Subject :<?= $row['subject']; ?> <br>
            Total Marks : <?= $row['totalmarks']; ?>  <br>
</form>
           <?php }
        

?>

                  <li><a href="logout.php"><i class="ti-close"></i> Logout</a></li>
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
  </body>
</html>
