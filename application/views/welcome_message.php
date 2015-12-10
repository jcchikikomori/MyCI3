<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="jumbotron">
		<h1>Yay! Welcome to MyCI3!</h1>
		<div id="body">
			<h4>The page you are looking at is being generated dynamically by CodeIgniter.</h4>
			<h4>If you would like to edit this page you'll find it located at:</h4>
			<code>application/views/welcome_message.php</code>
			<h4>The corresponding controller for this page is found at:</h4>
			<code>application/controllers/Welcome.php</code>
			<br />
			<h4>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</h4>
		</div>
		<h6>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></h6>
	</div>
</div>
