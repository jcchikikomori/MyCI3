<!-- Header only. Please always obey the concept -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MyCI3</title>
		<meta charset="utf-8">
		<meta name="description" content="">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="<?php echo $this->config->item('ASSETS_URL'); ?>/ext/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('ASSETS_URL'); ?>/cust.css" rel="stylesheet">
		<!-- <link href="/ext/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"> -->
		<!-- NOTE: Loading too much scripts inside the head tag significally decreases performance -->
		<script src="<?php echo $this->config->item('ASSETS_URL'); ?>/ext/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo $this->config->item('ASSETS_URL'); ?>/ext/bootstrap/dist/js/bootstrap.min.js"></script>
		<style>
			body {
				/* Bootstrap fixed header requirement */
				padding-top: 70px;
			}
		</style>
	</head>
	<body>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo $this->config->item('APP_HOST'); ?>">MyCI3</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo $this->config->item('APP_HOST'); ?>">Homepage</a></li>
	            <li><a href="<?php echo $this->config->item('APP_HOST'); ?>/articles">Articles</a></li>
	            <!--
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	            -->
	          </ul>
	        </li>
	      </ul>
	      
	      <ul class="navbar-form navbar-right">
	          <a href="<?php echo $this->config->item('APP_HOST'); ?>/login" class="btn btn-default">Login</a>
	      </ul>

	      <ul class="nav navbar-nav navbar-right">
	        <!-- <li><a href="#">Sign In</a></li> -->
	        <li><a>(c) <?php echo date('Y'); ?> C.T.T.M. Department</a></li>
	      </ul>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- ***************************** Then load the body ******************************* -->