<?php

class Ajax extends CI_Controller {

  public function Ajax() {
  
    parent::CI_Controller(); 
  }

  public function check_user()
  {
//    $this->load->model('MUser', '', TRUE);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    // если такое имя пользователя существует, возвращаем 1
/*    if ($this->MUser->username_exists($username)) {
      echo '1';
    }*/
	if ($this->redis->get($username)==$password) {
		echo ololo;
	};
  }

}

/* End of file ajax.php */
/* Location: ./system/application/controllers/ajax.php */
