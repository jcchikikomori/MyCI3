<?php
// if($_POST)
// {

defined('BASEPATH') OR exit('No direct script access allowed');

class Commentajax extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function comnt()
	{
	$this->load->view('comment');

	if($_POST)
	{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$lowercase = strtolower($email);
	$image = md5( $lowercase );
	mysql_query("INSERT INTO comments (name,email,comment) VALUES ('$name','$email','$comment') ") ;
	}
	else {
		alert("ERROR");
	}}}
	?>

	<li class="box">
	<img src="http://www.gravatar.com/avatar.php?gravatar_id=
	<?php echo $image; ?>"/>
	<?php echo $name;?><br />
	<?php echo $comment; ?>
	</li>
