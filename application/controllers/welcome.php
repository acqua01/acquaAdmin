<?php
class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        
    }

    public function home()
    {
   	$this->template->title('Free');
        $this->load->view('home');
		 }

		public function example_1()
	{
		$this->load->view('index');
	}
	
		public function add_new_user()
	{
		$this->load->view('add_new_user');
	}
    
}
?>