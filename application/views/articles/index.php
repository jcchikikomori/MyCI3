<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>ARTICLES</b>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>TITLE</th>
					<th>BODY</th>
					<th>ACTIONS</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($query as $q) { ?>
					<tr class='clickable-row'>
						<td><?php echo $q->article_id; ?></td>
						<td><?php echo $q->title; ?></td>
						<td><a href="<?php echo $this->config->item('URL'); ?>/articles/details/<?php echo $q->article_id; ?>"><?php echo $q->article_body; ?></a></td>
						<td></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>