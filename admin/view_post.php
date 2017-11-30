<?php include '../includes/db.php';?>
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
	
		<!--Sekcja Paneli-->
		
		<!--1 panel-->
		<div class="col-md-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em;"></i></div>
						<div class="col-xs-9 text-right">
							<div class="" style="font-size:2.5em;">20</div>
							<div class="" style="">Post</div>
						</div>
					</div>
				</div>
					<a href="#">
						<div class="panel-footer">
							<div class="pull-left">View Categories</div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
							<div class="clearfix"></div>
						</div>
					</a>
			</div>
		</div>
		
		<!--2 panel-->
		<div class="col-md-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size:4.5em;"></i></div>
						<div class="col-xs-9 text-right">
							<div class="" style="font-size:2.5em;">5</div>
							<div class="" style="">Categories</div>
						</div>
					</div>
				</div>
					<a href="#">
						<div class="panel-footer">
							<div class="pull-left">View Categories</div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
							<div class="clearfix"></div>
						</div>
					</a>
			</div>
		</div>
		
		<!--3 panel-->
		<div class="col-md-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size:4.5em;"></i></div>
						<div class="col-xs-9 text-right">
							<div class="" style="font-size:2.5em;">2</div>
							<div class="" style="">Users</div>
						</div>
					</div>
				</div>
					<a href="#">
						<div class="panel-footer">
							<div class="pull-left">View Users</div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
							<div class="clearfix"></div>
						</div>
					</a>
			</div>
		</div>
		
		<!--4 panel-->
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-comment" style="font-size:4.5em;"></i></div>
						<div class="col-xs-9 text-right">
							<div class="" style="font-size:2.5em;">6</div>
							<div class="" style="">Comments</div>
						</div>
					</div>
				</div>
					<a href="#">
						<div class="panel-footer">
							<div class="pull-left">View Comments</div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
							<div class="clearfix"></div>
						</div>
					</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<!--TOP Blocks Ends-->
		
		<!--Users Area start-->
		<div class="col-lg-8">
			<div class="panel panel-primary">
			
				<div class="panel-heading">
						<h4>Users list</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Roles</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Shazaib Kamal</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>2</td>
								<td>John Mark</td>
								<td>Subsrciber</td>
							</tr>
							<tr>
								<td>3</td>
								<td>John Mark</td>
								<td>Subsrciber</td>
							</tr>
							<tr>
								<td>4</td>
								<td>John Mark</td>
								<td>Subsrciber</td>
							</tr>
							<tr>
								<td>5</td>
								<td>John Mark</td>
								<td>Subsrciber</td>
							</tr>
						</tbody>
					</table>
				</div>
					
			</div>
		</div>
		<!--Users Area end-->
		
		<!--Profile Area start-->
		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
				<div class="col-md-7">
					<div class="page-header"><h4>Shazaib Kamal</h4></div>
				</div>
				<div class="col-md8">
					<img src="../images/model.jpg" width="30%" class="img-circle" style="border: 5px solid red;">
				</div>
					
					<div class="panel-body">
						<table class="table table-condensed">
						
							<tbody>
								<tr>
									<th>Job:</th>
									<td>Developer</td>
								</tr>
								<tr>
									<th>Role:</th>
									<td>Admin</td>
								</tr>
								<tr>
									<th>Email:</th>
									<td>abc@o2.pl</td>
								</tr>
								<tr>
									<th>Contact No:</th>
									<td>1234567</td>
								</tr>
								<tr>
									<th>Country:</th>
									<td>Pakistan</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				
				</div>
					
			</div>
		</div>
		<div class="clearfix"></div>
		<!--Profile Area end-->
		
		
		<!--Post lists starts-->
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Latest Post</h3></div>
			<div class="panel panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Date</th>
							<th>Image</th>
							<th>Title</th>
							<th>Description</th>
							<th>Category</th>
							<th>Author</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>2015-06-02</td>
							<td><img src="../images/img1.jpg" width="50px"/></td>
							<td>The First Post</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing.</td>
							<td>Nature</td>
							<td>Shazaib Kamal</td>
						</tr>
						<tr>
							<td>2</td>
							<td>2014-06-02</td>
							<td><img src="../images/img2.jpg" width="50px"/></td>
							<td>The Second Post</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing.</td>
							<td>Technology</td>
							<td>John Mark</td>
						</tr>
						<tr>
							<td>3</td>
							<td>2014-06-02</td>
							<td><img src="../images/img2.jpg" width="50px"/></td>
							<td>The Second Post</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing.</td>
							<td>Technology</td>
							<td>John Mark</td>
						</tr>
						<tr>
							<td>4</td>
							<td>2014-06-02</td>
							<td><img src="../images/img2.jpg" width="50px"/></td>
							<td>The Second Post</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing.</td>
							<td>Technology</td>
							<td>John Mark</td>
						</tr>
						<tr>
							<td>5</td>
							<td>2014-06-02</td>
							<td><img src="../images/img2.jpg" width="50px"/></td>
							<td>The Second Post</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing.</td>
							<td>Technology</td>
							<td>John Mark</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<!--Post lists ends-->
		
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
						</tr>
						<tr>
							<td>2</td>
							<td>2014-06-02</td>
							<td>David</td>
							<td>asdk@o2.pl</td>
							<td>2</td>
							<td>like!</td>
						</tr>
						<tr>
							<td>3</td>
							<td>2014-06-02</td>
							<td>Thomas</td>
							<td>sadkj@o2.pl</td>
							<td>2</td>
							<td>fdgdfgdfgdfg</td>
						</tr>
						<tr>
							<td>4</td>
							<td>2014-06-02</td>
							<td>Peter</td>
							<td>sss@o2.pl</td>
							<td>2</td>
							<td>ldskfndlskfmndlskfmn kldsmfn </td>
						</tr>
						<tr>
							<td>5</td>
							<td>2014-06-02</td>
							<td>Paul</td>
							<td>bok@o2.pl</td>
							<td>2</td>
							<td>Dupa</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		
		
		
	</div>
	
	<footer></footer>
</body>
</html>