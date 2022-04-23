<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Focus Admin: Widget</title>

  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

  <!-- Styles -->
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-primary" style="font-family: Manrope;">

  <?php

  if (isset($_POST['t_id'])) {
    // echo "ehgi";
    $t_id = $_POST['t_id'];
    $pass = $_POST['pass'];
    // echo "<h1>$t_id $pass</h1>";


    $host = 'localhost';
    $user = 'root';
    $password = '';
    $conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");

    $query = "SELECT * FROM user WHERE t_id = '$t_id' and pass='$pass'";
    // to check if tid and password are really present in db or nt
    // echo "<h1>$query</h1>";

    $result =  mysqli_query($conn, $query);
    // print_r(mysqli_fetch_assoc($result));
    // while($i = mysqli_fetch_assoc($result));
    // {
    // $s = $i['t_id'];
    // echo "<h1>$s = t_id </h1>";
    //  }
    $rows = mysqli_num_rows($result);
    // echo "<h1>$rows</h1>";
    if ($rows == 1) {


      //   echo "<h1>hey</h1>";
      $x = "select name from user where t_id = '$t_id' and pass='$pass'";

      $hey = mysqli_query($conn, $x);

      while ($row = mysqli_fetch_assoc($hey)) {
        session_start();
        $_SESSION['t_name'] = $row['name'];
        $_SESSION['t_id'] = $t_id;
        $_SESSION['is_student'] = 0;
        $_SESSION['flag'] = 0;
      }
      echo "<script>window.open('teacher-dashboard.php','_self')</script>";
      mysqli_close($conn);
    } else {
      echo "<h1>enter correct id or password</h1>";
    }







    // die();
  }
  ?>

  <div style="width:wrap;height:80px;background-color:#386dff;min-width: 500px;">
    <label style="color:#ffffff;font-size: 36px; font-weight: 600;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
    <label style="color:#ffffff;font-size: 36px;font-weight: 300; text-transform: none;">Port</label>
  </div>

  <div class="unix-login" style="background-color: #ffffff;margin-top: 120px; margin-bottom: 50px">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <a href="index.html"><span style="color: #1d1d1d;font-weight:bold;font-size: 40px">Welcome back Teacher!</span><br><span style="font-size: 30px;color: #1E223C;opacity: 65%;font-weight: 500;">Log in to your account</span></a>
            </div>
            <div class="login-form">
              <form action="teacher-login.php" method="POST" style="padding-left: 150px; padding-right: 150px;">
                <div class="form-group">
                  <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Teacher ID</label>
                  <input type="text" name="t_id" class="form-control" placeholder="Enter your Teacher ID" style="color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;border-color: #376dff;border-width: 2px">
                </div>
                <div class="form-group">
                  <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Enter Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Enter your Password" style="color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;border-color: #376dff;border-width: 2px">
                  <div style="display: flex;justify-content: right;align-items: right;">
                    <label style="color:#376dff;opacity:69%;font-size: 16px; font-weight: 500;text-transform: none;align-self: flex-end;visibility: visible;"><a href="teacher-forgot-password.html" style="color: #376dff">Forgot Password?</a></label>
                  </div>
                </div>

                <div style="display: flex;justify-content: center;align-items: center;">
                  <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 60px"><a href="index.html" style="color: #ffffff;">Login</a></button> -->

                  <input type="submit" value="Login" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 60px"><a href="index.html" style="color: #ffffff;">
                </div>

                <div style="display: flex;justify-content: center;align-items: center;margin-top: 10px">
                  <label style="color:#1E223C;opacity:65%;font-size: 16px; font-weight:500 normal;text-transform: none;">Don't have an account?</label>
                  <label style="color:#386dff;opacity:65%;font-size: 16px;font-weight:500;text-transform: none;"><a href="student-signup.php" style="color: #376dff">&nbsp Sign Up</a></label>
                </div>

              </form>
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

  <!-- bootstrap -->


  <script src="assets/js/lib/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>