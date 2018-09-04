<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nyoba
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	public function test()
	{
		echo "test";exit;
	}
}
