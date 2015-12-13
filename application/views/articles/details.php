<div class="container">
	<ol class="breadcrumb">
	  <li><a href="<?php echo $this->config->item('URL'); ?>">Home</a></li>
	  <li><a href="<?php echo $this->config->item('URL'); ?>/articles">Articles</a></li>
	  <li class="active"><?php echo $details['title']; ?></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><?php echo $details['title']; ?></h4>
		</div>
		<div class="panel-body">
			<p><?php echo $details['article_body']; ?></p>
		</div>
		<div class="panel-footer">
			<h4>Comments</h4>
			None
		</div>
	</div>
</div>