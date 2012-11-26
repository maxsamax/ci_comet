<?php

class Ajax extends CI_Controller {
	public function check_user()
  	{
//		$this->load->model('user_auth', '', TRUE);
	    $username = trim($_REQUEST['username']);
	    $password = trim($_REQUEST['password']);

	if ($this->redis->get($username) == $password) {
		$this->load->view('main');
	}else {
		echo "$username's password incorrect. Try again!";
	};
  }

}

?>
