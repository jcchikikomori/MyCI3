<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="jumbotron">
		<h1>Yay! Welcome to MyCI3!</h1>
		<div id="body">
			<h4>Oh wait, you've logged in!!!</h4>
		</div>
		<h6>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></h6>
	</div>
</div>
