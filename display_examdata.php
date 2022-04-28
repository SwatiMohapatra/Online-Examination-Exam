
<?php 

        $host = 'localhost';  
        $user = 'root';  
        $password = '';  
      
        $conn = mysqli_connect($host, $user, $password,'fyp') or die("connection failed"); 
        session_start();

        


$exam_id = $_POST['examId'];

$query = "select * from exam_question where exam_id='$exam_id' order by q_id";

$extracted = mysqli_query($conn, $query);

echo "Here is the exam paper"

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
</table>

<br>
Here are the details of students who attempted the exam
<!-- add the details here -->
<a href="teacher-dashboard.php">Next</a>

<?php 

$query = mysqli_query($conn, "select * from score natural join student where exam_id='$exam_id'");
?>

<table class="table table-hover">
<thead class="thead-light">
<tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Student ID</th>
      <th scope="col">ROll no</th>
      <th scope="col">Student name</th>
      <th scope="col">Score</th>
    </tr>
  </thead> 

  <?php   
while ($row = mysqli_fetch_assoc($query)){
?>          
    <tbody>
    <tr>
      <th scope="row"><?php echo $row['s_id'] ?></th>
      <td><?= $row['rollno']?></td>
      <td><?= $row['name']?></td>
      <td><?= $row['score']?></td>

      
    </tr> 
            <?php
            } 

// echo "<script>window.open('create_exam.php','_self')</script>";
?>
</table>
