<?php session_start();
	include '../includes/db.php';
	//początek logowania
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
	//koniec logowanie
	
	$error = '';
	
	//początek dodawania postów 
	if(isset($_POST['submit_post'])){
		$title = strip_tags($_POST['title']);
		$date = date('Y-m-d h:i:s');
		if($_FILES['image']['name'] != ''){
			$image_name = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			$image_size = $_FILES['image']['size'];
			$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
			$image_path = '../images/'.$image_name;
			$image_db_path = 'images/'.$image_name;
			
			if($image_size < 1000000){
				if($image_ext == 'jpg' || $image_ext == 'png' || $image_ext == 'gif'){
						if(move_uploaded_file($image_tmp, $image_path)){
							$ins_sql = "INSERT INTO posts (title, description, image, category, status, date, author) VALUES ('$title', '$_POST[description]','$image_db_path' '$_POST[category]', '$_POST[status]', '$date', '$_SESSION[user]')";
							if(mysqli_query($conn, $ins_sql)){
								header('Location: post_list.php');
							}else{
								$error = '<div class="alert alert-danger">The query was not working.</div>';
							}
						}else{
							$error = '<div class="alert alert-danger">Sorry, unfortunetly not been uploaded...</div>';
						}
					}else{
						$error = '<div class="alert alert-danger">Image format was not correct, use jpg, png or gif.</div>';
					}
				}else{
					$error = '<div class="alert alert-danger">image file size is much bigger then expect</div>';
				}
			}else{
				$ins_sql = "INSERT INTO posts (title, description, category, status, date, author) VALUES ('$title', '$_POST[description]', '$_POST[category]', '$_POST[status]', '$date', '$_SESSION[user]')";
				if(mysqli_query($conn, $ins_sql)){
								header('Location: post_list.php');
							}else{
								$error = '<div class="alert alert-danger">The query was not working.</div>';
							}
				
			}
		}
		//koniec dodawania postów
	
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
	
		<!--ERROR-->
		<?php echo $error;?>
		<!--ERROR-->
	
	<!--Sidebar start-->
	<?php include 'includes/sidebar.php';?>
	<!--Sidebar end-->
	
	<div class="col-lg-10">
		<?php 
			if(isset($_GET['edit_id'])){
				
			
			$sql = "SELECT * FROM posts WHERE id = $_GET[edit_id]";
			$run = mysqli_query($conn, $sql);
			while($rows = mysqli_fetch_assoc($run)){ ?>
				<div class="page-header"><h1><?php echo $rows['title'];?></h1></div>
		
		<!--Form start-->
		<div class="container-fluid">
			<form class="form-horizontal" action="new_post.php" method="POST" enctype="multipart/form-data">
			
				<!--Image-->
					<img src="../<?php echo $rows['image'];?>" width="100px">
					
				<div class="form-group">
					<label for="image" class="">Upload Image</label>
					<input id="image" name="image" type="file" class="btn btn-primary">
				</div>
			
				<!--Title-->
				<div class="form-group">
					<label for="title" class="">Title</label>
					<input id="title" name="title" type="text" class="form-control" value="<?php echo $rows['title'];?>" required>
				</div>
				
				<!--Category-->
				<div class="form-group">
					<label for="category" class="">Category</label>
					<select id="category" name="category" class="form-control" required>
									<option value="" selected>Wybierz kategorie</option>
					<?php 
						$sel_sql = "SELECT * FROM category";
						$run_sql = mysqli_query($conn, $sel_sql);
								
								while($c_rows = mysqli_fetch_assoc($run_sql)){
									if($c_rows['category_name'] == 'home'){
										continue;
									}
									echo '
									<option value="'.$c_rows['category_name'].'">'.ucfirst($c_rows['category_name']).'</option>
									';
								}
					
					?>
						
					</select>
				</div>
				
				<!--Description-->
				<div class="form-group">
					<label for="description" class="">Description</label>
					<textarea name="description" id="description"><?php echo $rows['description'];?></textarea>
				</div>
				
				<!--Status-->
				<div class="form-group">
					<label for="status" class="">Status</label>
					<select id="status" name="status" class="form-control">
						<option value="draft">Draft</option>
						<option value="published">Published</option>
					</select>
				</div>
				
				<!--Submit-->
				<div class="form-group">
					<input type="Submit" name="submit_post" class="btn btn-danger btn-block">
				</div>
			</form>
		</div>
		<!--Form end-->
			<?php }
			}else{
				echo '<div class="alert alert-danger">Please select a post to edit!</div>';
			}
		?>
		
				
	</div>
	
	<footer></footer>
</body>
</html>