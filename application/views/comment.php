<ol id="update" class="timeline">
</ol>
<div id="flash"></div>
<div >
<form action="#" method="post">
<input type="text" id="name"/>Name<br />
<input type="text" id="email"/>Email<br />
<textarea id="comment"></textarea><br />
<input type="submit" class="submit" value=" Submit Comment " />
</form>
</div>

<script type="text/javascript" src="../assets/ext/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" >
$(function() {
$(".submit").click(function()
{
$.ajax({
type: "POST",
url: "Commentajax/comnt",
data: {
 name = $("#name").val(),
 email = $("#email").val(),
 comment = $("#comment").val(),
 dataString = 'name='+ name + '&email=' + email + '&comment=' + comment;
 }
if(name=='' || email=='' || comment=='')
{
alert('Please Give Valid Details');
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" />Loading Comment...');
$.ajax({
type: "POST",
url: "Commentajax/comnt",
data: dataString,
cache: false,
success: function(html){
$("ol#update").append(html);
$("ol#update li:last").fadeIn("slow");
$("#flash").hide();
}
});
}return false;
}); });
</script>
