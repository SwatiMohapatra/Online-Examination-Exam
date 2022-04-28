<?php
$host = 'localhost';
$user = 'root';
$password = '';
$conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");
session_start();
?>


<?php
$s_id = $_SESSION['s_id'];
$score = 0;
$exam_id = $_SESSION['e_id'];

$extracted = mysqli_query($conn, "select * from exam_question natural join student_answer where exam_id='$exam_id' and student_answer.s_id='$s_id'");


while ($row = mysqli_fetch_assoc($extracted)) {

if ($row['ans'] == $row['answer']){




$score = $score+1;

}
}



mysqli_query($conn, "INSERT INTO score (s_id, exam_id, score) VALUES ('$s_id', '$exam_id', '$score')");

$x = mysqli_query($conn, "select * from score where s_id='$s_id' and exam_id='$exam_id'");
while ($row = mysqli_fetch_assoc($x)) {
$result = $row['score'];


}
?>

<html>
Results: <?= $result ?>
</html>