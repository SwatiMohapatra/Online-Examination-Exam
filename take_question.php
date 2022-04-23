<?php 
session_start();
  $host = 'localhost';  
        $user = 'root';  
        $password = '';  
        $conn = mysqli_connect($host, $user, $password,'fyp') or die("connection failed"); 

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $question = $_POST['question'];
  $optionA = $_POST['option-A'];
  $optionB = $_POST['option-B'];
  $optionC = $_POST['option-C'];
  $optionD = $_POST['option-D'];
  $ans = $_POST['ans'];
  $mark = $_POST['mark'];
  
  $_SESSION['q_id']= $_SESSION['q_id']+1;
  $q_id = $_SESSION['q_id'];
  $examid = $_SESSION['exam_id'];
        $query = "INSERT INTO exam_question(q_id, question, option_A, option_B, option_C, option_D, ans, mark, exam_id) VALUES ('$q_id', '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$ans', '$mark', '$examid');";

mysqli_query($conn, $query);


echo "<script>window.open('create_exam.php','_self')</script>";

}
?>