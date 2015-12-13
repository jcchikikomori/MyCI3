<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Comments - <?php echo $details['title']; ?></b>
				</div>
				<div class="panel-body">
					<div id="display_comment"></div>
					<form class="form-horizontal" method="post" id="form">
						<input type="hidden" id="article" value="<?php echo $details['article_id'];?>">
						<input type="hidden" id="name" name="name" value="pogi ang post nito">
						<textarea type="text" class="form-control" rows="4" id="comment" name="comment" placeholder="Leave some comment!"></textarea><br />
						<input class="btn btn-primary pull-right" id="submit" name="submit" type="submit" value="Submit Comment">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// execute when the HTML file's (document object model: DOM) has loaded
	$(document).ready(function () {
		//get article id for comments
		var id = $("#article").val();

		//create a function first
		function getComments(id) {
			$.ajax({
				type: 'POST',
				//TODO: Using append in url ( + id, ) is the temp solution
				url: '<?php echo $this->config->item('URL'); ?>/comment/display/' + id,
				success: function(data) {
					$("#display_comment").html(data).hide();
					$("#display_comment").delay(200).slideDown();
				},
				error: function() {
					$("#display_comment").html('No Comments');
				}
			});
		}

		//then call it
		getComments(id);
	});
	$(function() {
		$("#submit").click(function() {
			var comment = $("#comment").val();
			var article_id = $("#article").val();
			var dataString = 'name='+ name + '&comment=' + comment+ '&article_id=' + article_id;
			if(comment=='') {
				alert('Please Give Valid Details');
			} else {
				$("#display_comment").fadeIn(100).append('<div class="alert alert-info">Submitting new Comment...</div>');
				$.ajax({
					type: "POST",
					url: "<?php echo $this->config->item('URL'); ?>/comment/submit",
					data: dataString,
					cache: false,
					success: function(data){
						$("#display_comment").html(data);
						//$("#display_comment").fadeIn(data);
					}
				});
			} return false;
		});
	});
</script>