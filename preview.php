<?php 

        $host = 'localhost';  
        $user = 'root';  
        $password = '';  
        $conn = mysqli_connect($host, $user, $password,'fyp') or die("connection failed"); 
        session_start();
$_SESSION['flag']=1;


// extract exam id now
$exam_id= $_SESSION['exam_id'];
$query = "select * from exam_question where exam_id='$exam_id' order by q_id";

$extracted = mysqli_query($conn, $query);



?>

<table class="table table-hover">
<thead class="thead-light">
<tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      <th scope="col">Option A</th>
      <th scope="col">Option B</th>
      <th scope="col">Option C</th>
      <th scope="col">Option D</th>
      <th scope="col">Correct Ans</th>
      <th scope="col">Mark</th>
    </tr>
  </thead>  
<?php   
while ($row = mysqli_fetch_assoc($extracted)){
?>          
    <tbody>
    <tr>
      <th scope="row"><?php echo $row['q_id'] ?></th>
      <td><?= $row['question']  ?></td>
      <td><?= $row['option_A'] ?></td>
      <td><?= $row['option_B'] ?></td>
      <td><?= $row['option_C'] ?></td>
      <td><?= $row['option_D'] ?></td>
      <td><?= $row['ans'] ?></td>
      <td><?= $row['mark'] ?></td>
    </tr> 
            <?php
            } 

// echo "<script>window.open('create_exam.php','_self')</script>";
?>
<a href="teacher-dashboard.php">Next</a>
