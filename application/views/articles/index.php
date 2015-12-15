<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ol class="breadcrumb">
				<li><a href="<?php echo $this->config->item('URL'); ?>">Home</a></li>
				<li class="active">Articles</li>
				<a class="pull-right" href="<?php echo $this->config->item('URL'); ?>">
					<i class="glyphicon glyphicon-plus"></i> Create New
				</a>
			</ol>
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>ARTICLES</b>
				</div>
				<div class="panel-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>TITLE</th>
								<th>ACTIONS</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($query as $q) { ?>
							<tr class='clickable-row'>
								<td><?php echo $q->article_id; ?></td>
								<td><a href="<?php echo $this->config->item('URL'); ?>/articles/details/<?php echo $q->article_id; ?>"><?php echo $q->title; ?></a></td>
								<td>
									<a href="<?php echo $this->config->item('URL'); ?>/articles/edit/<?php echo $q->article_id; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
									<a href="<?php echo $this->config->item('URL'); ?>/articles/delete/<?php echo $q->article_id; ?>"><i class="glyphicon glyphicon-remove"></i></a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>