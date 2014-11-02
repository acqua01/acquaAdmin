<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        
    }

    public function first_page($msg = NULL)
    {
   	$this->template->title('Login');
       // $this->load->view('login');
		 $data['msg'] = $msg;
        $this->load->view('login',$data);
		 }
	public function process()
	{
	
		$this->load->model('login_model');
		$result=$this->login_model->validate();
		if(!$result)
		{
		$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->first_page($msg);
		}
		else 
		{
			redirect("welcome/home");
		}
	}
		
    
}
?>
