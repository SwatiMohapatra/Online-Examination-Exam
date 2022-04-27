<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");
session_start();
?>

<?php 
  $exam_id = $_POST['exam_id'];
  $q_id = $_POST['q_id'];
  $s_id = $_SESSION['s_id'];
  $ans = $_POST['ans'];
  $check = mysqli_query($conn,"SELECT * FROM student_answer WHERE s_id='$s_id' AND exam_id='$exam_id' AND q_id='$q_id'");
  if(mysqli_num_rows($check) == 1){
    $update = mysqli_query($conn,"UPDATE student_answer SET ans='$ans' WHERE s_id='$s_id' AND exam_id='$exam_id' AND q_id='$q_id'");

    echo "<script>window.open('give_exam.php','_self')</script>";
  }
  $query = "INSERT INTO student_answer(s_id, exam_id, q_id, ans) VALUES ('$s_id', '$exam_id', '$q_id', '$ans ')";
  echo "$exam_id ,$q_id $s_id $ans ";
  mysqli_query($conn, $query);

  echo "<script>window.open('give_exam.php','_self')</script>";
?>