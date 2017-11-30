<?php session_start();
	include '../includes/db.php';
	if(isset($_SESSION['user']) && isset($_SESSION['password'])){
		$sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
		if(	$run_sql = mysqli_query($conn, $sel_sql)){
			while($rows = mysqli_fetch_assoc($run_sql)){
				$user_f_name = $rows['user_f_name'];
				$user_l_name = $rows['user_l_name'];
				$user_email = $rows['user_email'];
				$user_gender = $rows['user_gender'];
				$user_maritial_status = $rows['user_maritial_status'];
				$user_phone_no = $rows['user_phone_no'];
				$user_designation = $rows['user_designation'];
				$user_website= $rows['user_website'];
				$user_address = $rows['user_address'];
				$user_about_me = $rows['user_about_me'];
				
			if(mysqli_num_rows($run_sql) == 1){
				if($rows['role'] == 'admin'){	
				}else{
					header('Location: ../index.php');
				}
			}else{
				header('Location: ../index.php');
			}
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
	
		
		<!--Profile Area start-->
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-3">
						<img src="../images/photo1.jpg" width="100%" class="img-thumbnail" style="border: 5px solid red;">
					</div>
					<div class="col-md-7">
						<h3><u><?php echo $user_f_name.' '.$user_l_name;?></u></h3>
						<p><i class="glyphicon glyphicon-heart"></i> <?php echo $user_designation;?></p>
						<p><i class="glyphicon glyphicon-road"></i> <?php echo $user_address;?></p>
						<p><i class="glyphicon glyphicon-phone"></i> <?php echo $user_phone_no;?></p>
						<p><i class="glyphicon glyphicon-envelope"></i> <?php echo $user_email;?></p>
					</div>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<!--Profile Area end-->
		
		<!--Panel 1-->
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<table class="table table-condensed">
						<tbody>
							<tr>
								<th>Gender</th>
								<td><?php echo ucfirst($user_gender);?></td>
							</tr>
							<tr>
								<th>Maritial status</th>
								<td><?php echo ucfirst($user_maritial_status);?></td>
							</tr>
							<tr>
								<th>Official Website:</th>
								<td><?php echo $user_website;?></td>
							</tr>
						</tdody>
					</table>
				</div>
			</div>
		</div>
		<!--Panel 1 end-->
		
		<!--Panel 2-->
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<table class="table table-condensed">
						<tbody>
							<tr>
								<td width="10%">1</td>
								<td>
									<a href="#">The First Post</a>
								</td>
							</tr>
							<tr>
								<td width="10%">2</td>
								<td>
									<a href="#">The Second Post</a>
								</td>
							</tr>
							<tr>
								<td width="10%">3</td>
								<td>
									<a href="#">The Third Post</a>
								</td>
							</tr>
						</tdody>
					</table>
				</div>
			</div>
		</div>
		<!--Panel 2 end-->
		
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>About me</h4>
					<p><?php echo $user_about_me;?></p>
				</div>
			</div>
		</div>
	
	
	
		
		
		
	</div>
	
	<footer></footer>
</body>
</html>