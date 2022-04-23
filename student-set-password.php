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

<?php
   $conn = mysqli_connect("localhost","root","","fyp") or die("connection unsuccessful");
  //  session_start();
   // $s_id = $_SESSION['s_id'];
   if ($_SERVER['REQUEST_METHOD']=='POST'){
      $s_id = $_POST['s_id'];
      $pass1= $_POST['pass1'];
      $pass2= $_POST['pass2'];
      $sec_q= $_POST['sec_q'];
      $sec_ans = $_POST['sec_ans'];

      // echo "<h1>$s_id</h1>";
      if ($pass1==$pass2)
      {
      $query = "update student set password='$pass1', sec_q='$sec_q', sec_ans='$sec_ans' where s_id='$s_id'";
      mysqli_query($conn, $query);
      echo "<script>window.open('student-dashboard.php','_self')</script>";

     
      }
      else {
       echo "<H1> Password mismatch <H1>";
        echo "<script>window.open('student-set-password.php','_self')</script>";

     
      }
   }

?>

<body class="bg-primary" style="font-family: Manrope;">

    <div style="width:wrap;height:80px;background-color:#386dff;min-width: 500px;">
        <label style="color:#ffffff;font-size: 36px; font-weight: 600;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
        <label style="color:#ffffff;font-size: 36px;font-weight: 300; text-transform: none;">Port</label>
    </div>

    <div class="unix-login"  style="background-color: #ffffff;margin-top: 50px; margin-bottom: 50px">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span style="color: #1d1d1d;font-weight:bold;font-size: 28px">Set Up your Password</span><br><span style="font-size: 24px;color: #1E223C;opacity: 65%;font-weight: 500;">Sign up to get started</span></a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" style="padding-left: 150px; padding-right: 150px;">
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Student ID</label>
                                    <input required name='s_id' type="text" class="form-control" placeholder="Enter your Student ID" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;">
                                </div>
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Enter Password</label>
                                    <input required name='pass1' type="password" class="form-control" placeholder="Enter your Password" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;">
                                </div>
                                <div class="form-group" style="margin-bottom: unset;">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Confirm Password</label>
                                    <input required name='pass2' type="password" class="form-control" placeholder="Re-Enter your Password" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;">
                                    <div style="display: flex;justify-content: right;align-items: right;">
                                        <!-- <label style="color:#E94B35;opacity:69%;font-size: 16px; font-weight: 500;text-transform: none;align-self: flex-end;visibility: visible;">P</label> -->
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for='security' style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Select a Security Question</label>

                                 <select required name="sec_q" id="security">
                                 <option value="nickname">Commonly used Nickname</option>
                                 <option value="subject">What is your favourite subject?</option>
                                 <option value="join_year">Which year did you join college?</option>
                                 <option value="school">What is your school name?</option>
                                 <option value="birth_year">Birth Year?</option>
                                 </select>



                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Enter your answer here</label>
                                    <input required name='sec_ans' type="text" class="form-control" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;">
                                </div>

                                <div style="display: flex;justify-content: center;align-items: center;">
                                <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 75px"><a href="student-login.html" style="color: #ffffff;">Submit</a></button> -->
<input required type="submit" value="submit">                                </div>

                                <div style="display: flex;justify-content: center;align-items: center;margin-top: 10px">
                                    <label style="color:#1E223C;opacity:65%;font-size: 16px; font-weight:500 normal;text-transform: none;">Already have an account?</label>
                                    <label style="color:#386dff;opacity:65%;font-size: 16px;font-weight:500;text-transform: none;">&nbsp Login</label>
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


    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
</body>

</html>
