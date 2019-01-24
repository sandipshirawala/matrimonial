<?php 
session_start();
class login extends CI_Controller
{
	public function index()
	{
		//$this->load->view('login_view');	
	}
	

	public function login_check()
	{
		$data['msg']='';
		if($_POST)
		{
			$email 	=	$this->input->post('txt_email');
			$pwd 	=	$this->input->post('txt_password');

			$login_res = $this->db->get_where('tbl_user',array('user_email'=>$email,'user_password'=>$pwd));
			//echo $login_res->num_rows();

			if($login_res->num_rows()>0)
			{
				foreach($login_res->result() as $login_row)
				{
					$_SESSION["user_full_name"] = $login_row->user_full_name;
					$_SESSION["user_email"] = $login_row->user_email;
					$_SESSION["user_id"]=$login_row->user_id;
					//redirect(base_url().'admin/manage_test');
					$url=$_SERVER["HTTP_REFERER"];
					redirect($url);
				}
			}
			else
			{
				$url=$_SERVER["HTTP_REFERER"];
				redirect($url);
				
				//  $data['msg']='<div class="alert alert-danger" role="alert"><strong>Wrong!</strong> Invalid Username or Password!</div>';
			}
		}
		//$this->load->view('login_view',$data);

	}

	public function log_out()
	{
		unset($_SESSION["user_full_name"]);
		unset($_SESSION["user_email"]);
		unset($_SESSION["user_id"]);
		session_destroy();
		//redirect(base_url().'login/login_check');
		redirect(base_url().'user');
	}
}
?>