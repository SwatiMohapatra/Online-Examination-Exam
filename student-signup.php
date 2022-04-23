<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass,'fyp');
 ?>

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

  if ($_SERVER['REQUEST_METHOD']=='POST') {

      $name = $_POST['name'];
      $s_id = $_POST['s_id'];
      $rollno = $_POST['rollno'];
      $year = $_POST['year'];
      $dept = $_POST['dept'];
      $division = $_POST['division'];
      
      
        $query = "SELECT * FROM student WHERE s_id = '$s_id'";
	
        $result =  mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);

	//echo "<h1>$rows</h1>";
          if ($rows !=0)
          {
              echo "s_id already exists";
              echo "<script>window.open('student-signup.php','_self')</script>";

              exit();

          }
          else {

              $sql = "INSERT INTO student(s_id,name,rollno,year,dept,division) VALUES ('$s_id','$name','$rollno','$year','$dept','$division')";
              $query = mysqli_query($conn, $sql);


              session_start();
              $_SESSION['s_name']=$name;
              $_SESSION['s_id']=$s_id;
              // $_SESSION['rollno']=$rollno;
              $_SESSION['is_student']=1;
             echo "<script>window.open('student-set-password.php','_self')</script>";

// echo "<h1>$rows</h1>";
// $res = mysqli_fetch_array($result);
// echo "<h1>$result</h1>";
              mysqli_close($conn);

          }
  }

  ?>

    <div style="width:wrap;height:80px;background-color:#386dff;min-width: 500px;">
        <label style="color:#ffffff;font-size: 36px; font-weight:600px;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
        <label style="color:#ffffff;font-size: 36px;font-weight:300px; text-transform: none;">Port</label>
    </div>

    <div class="unix-login"  style="background-color: #ffffff;margin-top: 50px; margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span style="color: #1d1d1d;font-weight:bold;font-size: 28px">Welcome Student!</span><br><span style="font-size: 24px;color: #1E223C;opacity: 65%;font-weight: 500;">Sign up to get started</span></a>
                        </div>
                        <div class="login-form">
                            <form action="" method="POST" style="padding-left: 150px; padding-right: 150px;">
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Student ID</label>
                                    <input required name='s_id' type="text" class="form-control" placeholder="Enter your Student ID" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;">
                                </div>
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Full Name</label>
                                    <input required name='name' type="text" class="form-control" placeholder="Enter your Full Name" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;">
                                </div>
                                <!-- <div class="form-group" style="display: flex; justify-content: space-between;padding: 0%;margin: auto; gap: 10px">
                                    <div style="float: left; flex:1">
                                        <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;margin: auto;">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter your Phone Number" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-size: 16px;border-radius: 5px;font-family:Manrope;font-weight: 600;margin-top: 8px;">
                                     </div> -->
                                     <div style="float: right; flex:1">
                                        <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;margin: auto;">Roll Number</label>
                                        <input required name='rollno' type="number" class="form-control" placeholder="Enter your Roll Number" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-size: 16px;border-radius: 5px;font-family:Manrope;font-weight: 600;margin-top: 8px;">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="security" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;margin-top: 15px;">Year</label>

                                    <div class="dropdown">
                                        <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="display: inline-flex;
                                        text-align: left; background-color: #E8EEF6;color: #A0A6AB;width: 100%;justify-content: space-between;align-items: center;font-weight: 600;font-size: 16px;text-transform: none">First Year
											<span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="min-width:100%;">
                                            <li style="text-align: center;"><a href="#">First Year</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center;"><a href="#">Second Year</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center;"><a href="#">Third Year</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center;;"><a href="#">Fourth Year</a></li>
                                        </ul> -->

                                        <!-- <label  for="security" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Year</label> -->

                                      <select required name="year" id="security">
                                      <option value="1">FY</option>
                                      <option value="2">SE</option>
                                      <option value="3">TE</option>
                                      <option value="4">BE</option>
                                      <!-- <option value="birth_year">Birth Year?</option> -->
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; justify-content: space-between;padding: 0%;margin: auto; gap: 10px">

                                    <div class="dropdown" style="float: left; flex:1">

                                        <label for="x" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Department</label>

                                        <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="display: inline-flex;width: 100%;
                                        text-align: left; background-color: #E8EEF6;color: #A0A6AB;justify-content: space-between;align-items: center;font-weight: 600;font-size: 16px;text-transform: none">CO
											<span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="min-width:100%;"style="width: auto;">
                                            <li style="text-align: center"><a href="#">CO</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">IT</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">EXTC</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">CIVIL</a></li>
                                        </ul> -->
                                        <select required name="dept" id="x">
                                          <option value="comps">Comps</option>
                                          <option value="it">IT</option>
                                          <option value="civil">Civil</option>
                                          <option value="mech">Mech</option>
                                          <option value="chem">Chemical</option>
                                          <option value="elec">Electronics</option>
                                          <!-- <option value="birth_year">Birth Year?</option> -->
                                          </select>
                                    </div>
                                    <div class="dropdown" style="float: left; flex:1">

                                        <label for="security" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Division</label>

                                        <select required name="division" id="security">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                       </select>
                                    </div>
                                    <div style="display: flex;justify-content: center;align-items: center;">
                                <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 75px" value="Sign Up">
                                </div>

                                <div style="display: flex;justify-content: center;align-items: center;margin-top: 10px">
                                    <label style="color:#1E223C;opacity:65%;font-size: 16px; font-weight:500 normal;text-transform: none;">Already have an account?</label>
                                    <label style="color:#386dff;opacity:65%;font-size: 16px;font-weight:500;text-transform: none;"><a href="student-login.html" style="color: #376dff">&nbsp Login</a></label>
                                </div>

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
