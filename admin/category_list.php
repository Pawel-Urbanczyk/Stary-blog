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
	
	//deleting category start
	$result = '';
	if(isset($_GET['del_id'])){
		$del_sql = "DELETE FROM category WHERE c_id = '$_GET[del_id]'";
	
		if(mysqli_query($conn, $del_sql)){
			$result = '<div class="alert alert-danger">You&apos;ve delete category no. '.$_GET['del_id'].'</div>';
		}
		
	}
	//deleting category end
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
	<?php echo $result;?>
	
		
		<!--Users Area start-->
		<div class="col-lg-8">
			<div class="panel panel-primary">
			
				<div class="panel-heading">
						<h4>Categories</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Category Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$sql="SELECT * FROM category";
							$run =mysqli_query($conn, $sql);
							$number = 1;
							while($rows = mysqli_fetch_assoc($run)){
								if($rows['category_name'] == 'home'){
									continue;
								}else{
									$category_name = ucfirst($rows['category_name']);
								}
								echo'
									<tr>
										<td>'.$number.'</td>
										<td>'.ucfirst($category_name).'</td>
										<td><a href="edit_category.php?cat_id='.$rows['c_id'].'" class="btn btn-warning btn-xs">Edit</td>
										<td><a href="category_list.php?del_id='.$rows['c_id'].'" class="btn btn-danger btn-xs">Delete</td>
									</tr>
								
								';
								$number++;
							}
						?>
							
						</tbody>
					</table>
				</div>
					
			</div>
		</div>
		<!--Users Area end-->
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	<footer></footer>
</body>
</html>