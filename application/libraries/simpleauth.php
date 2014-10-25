<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Simpleauth
{
	function cekSudahLogin(){
		$this->CI =& get_instance();
		if($this->CI->session->userdata('logged_in')==true)
			redirect('backend/home');
	}	
	function cekBelumLogin(){
		$this->CI =& get_instance();
		if($this->CI->session->userdata('logged_in')==false)
			redirect('backend/login');
	}
}