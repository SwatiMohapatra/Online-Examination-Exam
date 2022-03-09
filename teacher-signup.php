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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $t_id = $_POST['t_id'];
    $pass1= $_POST['pass1'];
    $pass2= $_POST['pass2'];
    $sec_q= $_POST['sec_q'];
    $sec_ans= $_POST['sec_ans'];

    if ($pass1 !=$pass2)
    {
        
        header("Location: teacher-signup.php"); /* Redirect browser */
        echo "Retype password again";
        exit();
    }
    else 
    {
        $host = 'localhost';  
        $user = 'root';  
        $pass = '';  
        $conn = mysqli_connect($host, $user, $pass,'fyp');  
        
        $query = "select * from user where t_id = '$t_id'";
        $result =  mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
    
        if ($rows !=0) 
        {
            echo "t_id already exists";
            header("Location: teacher-signup.php"); /* Redirect browser */
            exit();

        }
        else {
            $sql = "INSERT INTO user(name,t_id, pass,sec_q, sec_ans) VALUES ('$name','$t_id', '$pass1', '$sec_q', '$sec_ans')";  
            (mysqli_query($conn, $sql));
            
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['t_id']=$t_id;
            header('location: trial.php');
            mysqli_close($conn);    
     
        }
       
    }
    // die();
} 

?>

    <div style="width:wrap;height:80px;background-color:#386dff;min-width: 500px;">
        <label style="color:#ffffff;font-size: 36px;font-weight:600px;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
        <label style="color:#ffffff;font-size: 36px;font-weight:300px; text-transform: none;">Port</label>
    </div>

    <div class="unix-login"  style="background-color: #ffffff;margin-top: 50px; margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span style="color: #1d1d1d;font-weight:bold;font-size: 28px">Welcome Teacher!</span><br><span style="font-size: 24px;color: #1E223C;opacity: 65%;font-weight: 500;">Sign up to get started</span></a>
                        </div>
                        <div class="login-form">
                            <form action="teacher-signup.php" method="POST" style="padding-left: 150px; padding-right: 150px;">
                                <div class="form-group" style="margin-bottom: unset;">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Full Name</label>
                                    <input required type="text" name="name" class="form-control" placeholder="Enter your Full Name" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;margin-bottom: 20px">
                                </div>

                                <!-- <div class="form-group" style="display: flex; justify-content: space-between;padding: 0%;margin-bottom: 20px; gap: 10px">
                                    <div style="float: left; flex:1">
                                        <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;margin: auto;">Phone Number</label>
                                        <input required type="text" name="phone_number" class="form-control" placeholder="Enter your Phone Number" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-size: 16px;border-radius: 5px;font-family:Manrope;font-weight: 600;">
                                     </div> -->

                                     <div style="float: right; flex:1">
                                        <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;margin: auto;">Teacher ID</label>
                                        <input required type="text" name="t_id" class="form-control" placeholder="Enter your Teacher ID" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-size: 16px;border-radius: 5px;font-family:Manrope;font-weight: 600;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Enter Password</label>
                                    <input required type="password" name="pass1" class="form-control" placeholder="Enter your Password" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;">
                                </div>
                                <div class="form-group">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Confirm Password</label>
                                    <input required type="password" name='pass2' class="form-control" placeholder="Re-Enter your Password" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;">
                                </div>
                                
                                <div class="form-group">

                                    <!-- <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Select a Security Question</label> -->

                                    <!-- <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="display: inline-flex;
                                        text-align: left; background-color: #E8EEF6;color: #A0A6AB;width: 100%;justify-content: space-between;align-items: center;font-weight: 600;font-size: 16px;text-transform: none">Describe yourself in one word
											<span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="min-width:100%;">
                                            <li style="text-align: center"><a href="#">From which college did u graduate from?</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">What is your favourite subject?</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">Which year did you graduate?</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">What is your school name?</a></li>
                                            <li class="divider"></li>
                                            <li style="text-align: center"><a href="#">Birth Year?</a></li>
                                        </ul>
                                    </div> -->

                                    <label  for="security" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none">Select a Security Question</label>

                                        <select required name="sec_q" id="security">
                                        <option value="college">From which college did u graduate from?</option>
                                        <option value="subject">What is your favourite subject?</option>
                                        <option value="grad_year">Which year did you graduate?</option>
                                        <option value="school">What is your school name?</option>
                                        <option value="birth_year">Birth Year?</option>
                                        </select>
                                </div>
                                <div class="form-group" style="margin-bottom: unset;">
                                    <label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Enter you answer</label>
                                    <input required type="text" name="sec_ans" class="form-control" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-weight: 600;font-family:Manrope;font-size: 16px;border-radius: 5px;margin-bottom: 10px">
                                </div>

                                <!--<div class="checkbox">
                                    <label>
										<input type="checkbox"> Agree the terms and policy 
									</label>
                                </div>-->

                                <div style="display: flex;justify-content: center;align-items: center;">
                                <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 40px"><a href="teacher-login.html" style="color: #ffffff;">Sign up</a></button> -->
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold;margin-top: 40px">
                                </div>

                                <div style="display: flex;justify-content: center;align-items: center;margin-top: 10px">
                                    <label style="color:#1E223C;opacity:65%;font-size: 16px; font-weight:500 normal;text-transform: none;">Already have an account?</label>
                                  
                                   <!-- Need to do modifications below -->

                                    <label style="color:#386dff;opacity:65%;font-size: 16px;font-weight:500;text-transform: none;"><a href="student-login.html" style="color: #376dff">&nbsp Login</a></label>
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