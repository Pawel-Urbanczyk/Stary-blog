<?php include 'includes/db.php';?>
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
	<!--Pasek nawigacji-->
	<?php include 'includes/header.php';?>
	
	<!--Sidebar z artykułami-->
	<div class="container">
		<article class="row">
			<section class="col-lg-8">
			<?php 
				if(isset($_GET['post_id'])){
						$sel_sql = "SELECT * FROM posts WHERE id = '$_GET[post_id]'";
						$run_sql = mysqli_query($conn, $sel_sql);
							while($rows = mysqli_fetch_assoc($run_sql)){
								echo '
								<div class="panel panel-default">
								<div class="panel-body">
									<div class="panel-header">
										<h2>'.$rows['title'].'</h2>
									</div>
									<img src="'.$rows['image'].'" width="100%">
									<p>'.$rows['description'].'</p>
								</div>
							</div>
								';
							}
				}else{
					echo '<div class="alert alert-danger">No Post you selected to show!<a href="index.php"> Clik here to select a POST!</a></div>';
				}
				
			?>
				
			</section>
			
			
				<!--Sekcja z ostatnimi artykułami-->
			<?php include 'includes/sidebar.php'; ?>
		
		</article>
	</div>
	
	<div style="margin:50px;width:50px;height:50px;"></div>
	<!--footer-->
	<?php  include 'includes/footer.php';?>
	
	
</body>
</html>