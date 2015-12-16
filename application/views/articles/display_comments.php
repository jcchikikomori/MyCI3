<?php foreach($comments as $row) { ?>
	<div class="panel panel-default" style="margin-top: 0;">
		<div class="panel-heading">From: <?php echo $row->name . ' (' . $row->email . ')';?></div>
		<div class="panel-body"><?php echo $row->comment;?></div>
	</div>
<?php } ?>