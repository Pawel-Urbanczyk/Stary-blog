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
				$sel_sql = "SELECT * FROM posts WHERE category = '$_GET[cat_id]' AND status = 'published' ORDER BY id DESC";
				$run_sql = mysqli_query($conn, $sel_sql);
				while($rows = mysqli_fetch_assoc($run_sql)){
					echo '
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3><a href="post.php?post_id='.$rows['id'].'">'.$rows['title'].'</a></h3>
					</div>
					
					<div class="panel-body">
						
						<div class="col-lg-4">
							<img src="'.$rows['image'].'" width="100%">
						</div>
						
						<div class="col-lg-8">
							<p>'.substr($rows['description'], 0, 350).'...</p>
						</div>
						<a href="post.php?post_id='.$rows['id'].'" class="btn btn-primary">Read more</a>
					</div>
				</div>
					';
				}
				?>
		
			</section>
			
			
				<!--Sekcja z ostatnimi artykułami-->
				<?php  include 'includes/sidebar.php'?>
			
		</article>
	</div>
	
	<div style="margin:50px;width:50px;height:50px;"></div>
	<!--footer-->
	<?php  include 'includes/footer.php';?>
	
	
</body>
</html>