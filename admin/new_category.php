<?php session_start();
	include '../includes/db.php';
	if(isset($_SESSION['user']) && isset($_SESSION['password'])){
		$sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
		if(	$run_sql = mysqli_query($conn, $sel_sql)){
			if(mysqli_num_rows($run_sql) == 1){
				
			}else{
				header('Location: ../index.php');
			}
		}
	}else{
		header('Location: ../index.php');
	}
		$result = '';
	//dodawanie nowej kategorii start
	if(isset($_POST['submit_category'])){
		$category = strip_tags($_POST['category']);
		$sql = "INSERT INTO category (category_name) VALUES ('$category')";
		if(mysqli_query($conn, $sql)){
			$result = '<div class="alert alert-success">You&apos;ve created a new category named '.$category.'</div>';
		}
		
	}
	
	
	//dodawanie nowej kategorii koniec
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Admin Panel</title>
	<meta name="description" content="Centralny system zarządzania treścią." />
	<meta name="keywords" content="CMS" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<!--Bootstrap, w takiej kolejności !!!-->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css" />
	<script src="../js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	
	<!--Tinymce edytor tekstu-->
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	

</head>

<body>
	<!--header-->
		<?php include 'includes/header.php';?>
	<!--header-->
	
	<div style="width:50px;height:50px;"></div>
	
	<!--Sidebar start-->
	<?php include 'includes/sidebar.php';?>
	<!--Sidebar end-->
	
	<div class="col-lg-10">
	
	<?php echo $result;?>
		
		<div class="page-header"><h1>New Category</h1></div>
		
		<!--Form start-->
		<div class="container-fluid">
			<form class="form-horizontal col-lg-5" action="new_category.php" method="POST">
			
				<!--Title-->
				<div class="form-group">
					<label for="category" class="">Title</label>
					<input id="category" name="category" type="text" class="form-control">
				</div>
				
				<!--Submit-->
				<div class="form-group">
					<input type="Submit" name="submit_category" class="btn btn-danger btn-block">
				</div>
			</form>
		</div>
		<!--Form end-->
				
	</div>
	
	<footer></footer>
</body>
</html>