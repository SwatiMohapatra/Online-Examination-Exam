<!DOCTYPE html>
<html lang="en">
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
  
    <!-- My code from here -->

    <h1>Create A New Question</h1>





<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Enter Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="take_question.php" method="POST">
        <input type="text" name="question" required placeholder='Enter Your Question'  id=""> <br> <br>
        Mark : <input type="text" name="mark" required value='0'  id=""> <br> <br>
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

<a href="preview.php">DONE?</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>