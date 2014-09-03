<!DOCTYPE html>
	<html>
	<head>
		
		<?@require_once('process.php');?>

		<title>Local Bin</title>

		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		
		<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/itsmy.css">
		
		
		<script src="assets/js/jquery-1.11.0.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<script src="assets/js/itsmy.js"></script>

	</head>
	<body>

	<div class="navbar navbar-inverse navbar-twitch" role="navigation">
		<div class="container">
			<div class="">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.php">
							<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home"> 
								<span class="fa fa-archive"></span> 
							</span>
							<span class="full-nav"> < Local Bin > </span>
						</a>
					</li>
					<li>
						<a href="create.php">
							<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Create"> 
								<span class="glyphicon glyphicon-plus"></span> 
							</span>
							<span class="full-nav"> Create </span>
						</a>
					</li>
					<li>
						<a href="bins.php">
							<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Create"> 
								<span class="fa fa-file"></span> 
							</span>
							<span class="full-nav"> Bin Files </span>
						</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<button type="button" class="btn btn-default btn-xs navbar-twitch-toggle">
		<span class="glyphicon glyphicon-chevron-right nav-open"></span>		
		<span class="glyphicon glyphicon-chevron-left nav-close"></span>
	</button>

	<div class="container">

	<!-- LAYOUT : http://bootsnipp.com/snippets/featured/twitch-like-navbar -->

	<?if(isset($sly->system_message) && $sly->system_message):?>
		<div class="alert alert-info"><?=$sly->system_message?></div>
	<?endif;?>
	
	