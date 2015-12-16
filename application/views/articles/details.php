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
				<div class="panel-body" id="comments" style="display: none;">
					<div id="display_comment"></div>
					<form class="form-horizontal" method="post" id="comment_form">
						<input type="hidden" id="article" value="<?php echo $details['article_id'];?>">
						<input type="hidden" id="name" name="name" value="pogi ang post nito">
						<input type="hidden" id="email" name="email" value="sample@ako.com">
						<textarea type="text" class="form-control" rows="4" id="comment" name="comment" placeholder="Leave some comment!"></textarea><br />
						<input class="btn btn-primary pull-right" id="submit" name="submit" type="submit" value="Submit Comment">
					</form>
				</div>
				<div class="panel-footer"></div>
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
				//TODO: Using append in url ( + id, ) is the temp solution
				url: '<?php echo $this->config->item('URL'); ?>/comment/display/' + id,
				success: function(data) {
					if (data) {
						$("#display_comment").html(data);
					} else {
						$("#display_comment").html('<div class="alert alert-info">No Comments</div>');
					}
				},
				error: function() {
					$("#display_comment").html('<div class="alert alert-danger">Unable to fetch Comments</div>');
				}
			});
			$("#comments").delay(400).slideDown(300);
		}

		//then call it
		getComments(id);
	});
	$(function() {
		$("#submit").click(function() {
			$("#submit").addClass("disabled");
			var name = $("#name").val();
			var email = $("#email").val();
			var comment = $("#comment").val();
			var article_id = $("#article").val();

			var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment+ '&article_id=' + article_id;
			if(comment=='') {
				$("#display_comment").append('<div class="alert alert-danger" id="error">ERR! Please provide details below</div>');
				$("#submit").removeClass("disabled");
				setTimeout(function(){
					$("#error").fadeOut();
				}, 6000);
			} else {
				$("#error").hide();
				$("#display_comment").fadeIn(100).append('<div class="alert alert-info">Submitting new Comment...</div>');
				$.ajax({
					type: "POST",
					url: "<?php echo $this->config->item('URL'); ?>/comment/submit/" + article_id,
					data: dataString,
					cache: false,
					success: function(data){
						setTimeout(function(){
							$("textarea#comment").val("");
							$("#display_comment").html(data);
							$("#submit").removeClass("disabled");
						}, 1000);
					}
					//error: function() {
					//	$("#display_comment").append('<div class="alert alert-danger">Sorry! Unable to submit comment. Please try again</div>');
					//}
				});
			} return false;
		});
	});
</script>