<?php
$host = 'localhost';
$user = 'root';
$password = '';
$conn = mysqli_connect($host, $user, $password, 'fyp') or die("connection failed");
session_start();
?>

<?php

if (isset($_POST['exam_id'])) {
	$_SESSION['e_id'] = $_POST['exam_id'];


	// echo $exam_id;
	// echo $_SESSION['s_id'];
}

$exam_id = $_SESSION['e_id'];

$query = "select * from exam_question where exam_id='$exam_id' order by q_id";
$extracted = mysqli_query($conn, $query);
?>

<!--  -->

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
		<label style="color:#ffffff; font-size: 36px; font-weight:600px;text-transform: none; margin-left: 100px;margin-top: 12px">ex</label>
		<label style="color:#ffffff; font-size: 36px;font-weight:300px; text-transform: none;">Port</label>
	</div>

	<div class="unix-login" style="background-color: #ffffff;margin-top: 50px; margin-bottom: 50px;">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login-content">
						<div class="login-form">

							<form action="answer_database.php" method="POST" style="padding-left: 150px; padding-right: 150px;">

								<input type="text" name="exam_id" value="<?= $exam_id ?>" hidden>
								<!-- <h1><?php $exam_id ?> <?php $_SESSION['s_id'] ?></h1> -->


								<?php
								while ($row = mysqli_fetch_assoc($extracted)) { ?>

									<!-- Content Start -->

									<div class="form-group">
										<label style="color:ity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Question &nbsp </label>
										<input type="text" name="q_id" value="<?php echo $row['q_id'] ?>" hidden>
										<label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;">Marks <?= $row['mark'] ?> </label>
										<br>
										<label style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;"><?php echo $row['q_id'] ?>. <?= $row['question'] ?> </label>


									</div>
									<div class="form-group">

										<input type="radio" id="answer" name="ans" value="A" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;margin-bottom: 5px;">
										<label for="answer" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;"><?= $row['option_A'] ?></label><br>


										<input type="radio" id="answer" name="ans" value="B" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;margin-bottom: 5px;">
										<label for="answer" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;"><?= $row['option_B'] ?></label> <br>


										<input type="radio" id="answer" name="ans" value="C" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;margin-bottom: 5px;">
										<label for="answer" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500;text-transform: none;"><?= $row['option_C'] ?></label><br>


										<input type="radio" id="answer" name="ans" value="D" style="background-color: #E8EEF6;color:#1E223C;opacity:65%;font-family:Manrope;font-weight: 600;font-size: 16px;border-radius: 5px;margin-bottom: 5px;">
										<label for="answer" style="color:#1E223C;opacity:65%;font-size: 17px; font-weight: 500; margin-bottom:10px; text-transform: none;"><?= $row['option_D'] ?></label><br> <br>

										<div style="display: flex;justify-content: center;align-items: center;">
											<input type="submit" value="Save" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold">
							</form>
							<!-- Content End -->
						<?php
								}

						?>
						<div style="display: flex;justify-content: center;align-items: center;">
							<button type="button" value="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="padding-left: 50px;padding-right:50px; padding-top:10px;padding-bottom:10px;border-radius:15px; background-color:#386dff; font-size: 17px;text-transform: none;font-weight: bold"><a href="check_ans.php" style="color: #ffffff;">Final Submit</a>



						</div>

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


	<script src="assets/js/lib/bootstrap.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>