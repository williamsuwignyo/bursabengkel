<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions
{
	protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
	public function __construct()
	{
		// Assign the CodeIgniter super-object
		$this->CI =& get_instance();
	}
	
    public function load_view($view,$data=null)
    {
    	$this->CI->load->view('header');
    	$this->CI->load->view($view,$data);
    	$this->CI->load->view('footer');
    }
}