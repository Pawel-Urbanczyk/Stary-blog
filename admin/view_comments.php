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
	<div style="width:50px;height:50px;"></div>
		
		<!--Comments area starts-->
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Latest Comments</h3></div>
			<div class="panel panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Date</th>
							<th>Author</th>
							<th>Email</th>
							<th>Post</th>
							<th>Comments</th>
							<th>Status</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>2015-06-02</td>
							<td>Michael</td>
							<td>abc@abc.com</td>
							<td>2</td>
							<td>sdf</td>
							<td>Aprproved</td>
							<td><a href="#" class="btn btn-danger btn-xs">Delete</td>
						</tr>
						<tr>
							<td>2</td>
							<td>2014-06-02</td>
							<td>David</td>
							<td>asdk@o2.pl</td>
							<td>2</td>
							<td>like!</td>
							<td><a href="#" class="btn btn-warning btn-xs">Approve</td>
							<td><a href="#" class="btn btn-danger btn-xs">Delete</td>
						</tr>
						<tr>
							<td>3</td>
							<td>2014-06-02</td>
							<td>Thomas</td>
							<td>sadkj@o2.pl</td>
							<td>2</td>
							<td>fdgdfgdfgdfg</td>
							<td>Aprproved</td>
							<td><a href="#" class="btn btn-danger btn-xs">Delete</td>
						</tr>
						<tr>
							<td>4</td>
							<td>2014-06-02</td>
							<td>Peter</td>
							<td>sss@o2.pl</td>
							<td>2</td>
							<td>ldskfndlskfmndlskfmn kldsmfn </td>
							<td><a href="#" class="btn btn-warning btn-xs">Approve</td>
							<td><a href="#" class="btn btn-danger btn-xs">Delete</td>
						</tr>
						<tr>
							<td>5</td>
							<td>2014-06-02</td>
							<td>Paul</td>
							<td>bok@o2.pl</td>
							<td>2</td>
							<td>Dupa</td>
							<td>Aprproved</td>
							<td><a href="#" class="btn btn-danger btn-xs">Delete</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--Comments area end-->
		
		
		
	</div>
	
	<footer></footer>
</body>
</html>