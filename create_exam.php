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

  <div style="width:wrap;height:80px;background-color:#386dff;min-width: 500px;">
    <label style="color:#ffffff;font-size: 36px; font-weight:600px;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
    <label style="color:#ffffff;font-size: 36px;font-weight:300px; text-transform: none;">Port</label>
  </div>

  <div class="unix-login" style="background-color: #ffffff;margin-top: 50px; margin-bottom: 50px;">
    <-div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo" style="margin-top: 260px;">
              <!-- <a href="index.html"><span style="color: #1d1d1d;font-weight:bold;font-size: 20px;">Click the button to create a new question</span></a> -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Create New Question
              </button> <br>
                      <a style="color: black;" href="preview.php">DONE?</a>

            </div>
            <div class="login-form">
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Enter Question</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="take_question.php" method="POST">
                        <input type="text" name="question" required placeholder='Enter Your Question' id=""> <br> <br>
                        <b style="color: black;">Marks</b> : <input type="text" name="mark" placeholder="enter marks" required id=""> <br> <br>
                        <label>Option A</label> <input type="text" name="option-A" id=""> <br>
                        <label>Option B</label> <input type="text" name="option-B" id=""> <br>
                        <label>Option C</label> <input type="text" name="option-C" id=""> <br>
                        <label>Option D</label> <input type="text" name="option-D" id=""> <br>

                        <h1>Select correct Answer</h1>
                        <label for="answer">Option A</label>
                        <input type="radio" id="answer" name="ans" value="A"><br>
                        <label for="answer">Option B</label>
                        <input type="radio" id="answer" name="ans" value="B"><br>
                        <label for="answer">Option C</label>
                        <input type="radio" id="answer" name="ans" value="C"><br>
                        <label for="answer">Option D</label>
                        <input type="radio" id="answer" name="ans" value="D"><br>



                        <input type="submit" value="Submit">
                        
                      </form>
                    </div>

                  </div>
                </div>









                <!-- <form style="padding-left: 10px; padding-right: 10px;">

                <div style="display: flex;justify-content: center;align-items: center;">
                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold"><a href="student-signuppp-set-password.html" style="color: #ffffff;">Create a New Question</a></button>
                </div>

                <div style="display: flex;justify-content: center;align-items: center;margin-top: 10px">
                  <label style="color:#386dff;opacity:65%;font-size: 16px;font-weight:500;text-transform: none;"><a href="student-login.html" style="color: #376dff">&nbsp Done?</a></label>
                </div>

              </form> -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="assets/js/lib/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>