<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commentajax extends CI_Controller {

	public function comnt()
	{
		if($_POST)
		{
			//may something dito.... sundan mo ilan kong codes sa ibang controller
			$name=$_POST['name'];
			$email=$_POST['email'];
			$comment=$_POST['comment'];
			$lowercase = strtolower($email);
			$image = md5( $lowercase );
			// dapat nasa model to
			// mysql_query("INSERT INTO comments (name,email,comment) VALUES ('$name','$email','$comment') ") ;
		}
		else {
			alert("ERROR");
		}

		$this->load->view('comment');
	}
	 	
	 	// dapat nasa loob ng view ito
		<li class="box">
		<img src="http://www.gravatar.com/avatar.php?gravatar_id=
		<?php echo $image; ?>"/>
		<?php echo $name; ?> <br />
		<?php echo $comment; ?>
		</li>
}