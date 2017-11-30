<?php include 'includes/db.php';
	if(isset($_POST['submit_contact'])){
		$date = date('Y-m-d H:i:s');
		$ins_sql = "INSERT INTO comments (name,email,subject,comment,date) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[comment]', '$date')";
		$run_sql = mysqli_query($conn, $ins_sql);
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
					<h2>Contact Us Form</h2>
				</div>
				<form class="form-horizontal" action="contact.php" method="post" role="form">
					<!--name-->
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" placeholder="Insert your name" id="name">
						</div>
					</div>
					<!--email-->
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email" placeholder="Inser Your Email" id="email">
						</div>
					</div>
					<!--subject-->
					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="subject" placeholder="Subject" id="subject">
						</div>
					</div>
					<!--comment-->
					<div class="form-group">
						<label for="comments" class="col-sm-2 control-label">Comment</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="10" name="comment" style="resize:none;"></textarea>
						</div>
					</div>
					<!--submit-->
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<input type="submit" value="Submit your Form" name="submit_contact" class="btn btn-block btn-danger" id="subject">
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