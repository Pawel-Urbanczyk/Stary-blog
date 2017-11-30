<?php include 'includes/db.php';
	$match = '';
	if(isset($_POST['submit_user'])){
		
		if($_POST['password'] == $_POST['con_password']){
				$date = date('Y-m-d H:i:s');
			$ins_sql = "INSERT INTO users (role, user_f_name, user_l_name, user_email, user_password, user_gender, user_maritial_status, user_phone_no, user_designation, user_website, user_address, user_about_me, user_date) VALUES ('subscriber', '$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]', '$_POST[gender]', '$_POST[maritial_status]', '$_POST[phone_no]', '$_POST[designation]', '$_POST[website]', '$_POST[address]', '$_POST[about_me]', '$date')";
			$run_sql = mysqli_query($conn, $ins_sql);
		}else{
			$match = '<div class="alert alert-danger">Password does&apos;t match!</div>';
		}

	
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>CMS SYSTEM</title>
	<meta name="description" content="Centralny system zarządzania treścią." />
	<meta name="keywords" content="CMS" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<!--Bootstrap-->
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
	

</head>

<body>
	<?php include 'includes/header.php';?>
	<div class="container">
		<article class="row">
			<section class="col-lg-8">
				<div class="page-header">
					<h2>Register</h2>
				</div>
				<?php echo $match; ?>
				<form class="form-horizontal" action="registration.php" method="post" role="form">
					<!--first name-->
					<div class="form-group">
						<label for="first_name" class="col-sm-3 control-label">First Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="first_name" placeholder="Insert your first name" id="first_name" required>
						</div>
					</div>
					<!--last name-->
					<div class="form-group">
						<label for="last_name" class="col-sm-3 control-label">Surname</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="last_name" placeholder="Insert your last name" id="last_name" required>
						</div>
					</div>
					<!--email-->
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email" placeholder="Inser Your Email" id="email" required>
						</div>
					</div>
					<!--password-->
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="password" placeholder="Insert a password" id="password" required>
						</div>
					</div>
					<!--confirm password-->
					<div class="form-group">
						<label for="con_password" class="col-sm-3 control-label">Confirm password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="con_password" placeholder="Confirm password" id="con_password" required>
						</div>
					</div>
					<!--gender-->
					<div class="form-group">
						<label for="gender" class="col-sm-3 control-label">Gender</label>
						<div class="col-sm-3">
							<select class="form-control" id="gender" name="gender" required>
								<option values="">Select gender</option>
								<option values="male">Male</option>
								<option values="female">Female</option>
							</select>
						</div>
				
					<!--Maritial Status-->
					
						<label for="maritial_status" class="col-sm-2 control-label">Maritial Status</label>
						<div class="col-sm-3">
							<select class="form-control" name="maritial_status" id="maritial_status">
								<option values="">Select status</option>
								<option values="single">Single</option>
								<option values="married">Married</option>
								<option values="divorced">Divorced</option>
								<option values="other">Other</option>
							</select>
						</div>
					</div>
					<!--phone-->
					<div class="form-group">
						<label for="phone_no" class="col-sm-3 control-label">Phone No:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone_no" placeholder="Insert your contact number" id="phone_no">
						</div>
					</div>
					<!--job-->
					<div class="form-group">
						<label for="designation" class="col-sm-3 control-label">Designation</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="designation" placeholder="Insert your designation" id="designation">
						</div>
					</div>
					<!--website-->
					<div class="form-group">
						<label for="website" class="col-sm-3 control-label">Official Website</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="website" placeholder="Insert your website" id="website">
						</div>
					</div>
					<!--adress-->
					<div class="form-group">
						<label for="address" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-8">
							<textarea name="address" id="address"class="form-control" rows="2"></textarea>
						</div>
					</div>
					<!--about-->
					<div class="form-group">
						<label for="about_me" class="col-sm-3 control-label">About me</label>
						<div class="col-sm-8">
							<textarea name="about_me" id="about_me" class="form-control" rows="6" required></textarea>
						</div> 
					</div>
					<!--submit-->
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<input type="submit" value="Register Yourself" name="submit_user" class="btn btn-block btn-danger" id="subject">
						</div>
					</div>
				</form>
			</section>
			
				<?php include 'includes/sidebar.php'; ?>
			
		</article>
	</div>
	<div style="width:50px;height:50px;"></div>
	<?php include 'includes/footer.php';?>

</body>
</html>