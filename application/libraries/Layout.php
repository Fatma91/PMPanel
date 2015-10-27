<?php

/**
* 
*/
class Layout
{
	private $CI;
	private $layout_title = null;
	private $layout_desc = null;
	private $includes = array();
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function set_title($title)
	{
		$this->layout_title=$title;
	}

	public function set_desc($s)
	{
		$this->layout_desc=$s;
	}

	public function add_includes($path, $prepend_base_url=true)
	{
		if ($prepend_base_url) 
		{
			$this->CI->load->helper('url');
			$this->includes[] = base_url() . $path;
		}
		else
		{
			$this->includes[] = $path;
		}

		return $this;
	}

	public function print_includes()
	{
		$final_includes = '';
		foreach ($this->includes as $include) 
		{
			if (preg_match('/js$/', $include))
			{
				$final_includes .= '<script src"' .$include . '"></script>';
			}
			if (preg_match('/css$/', $include))
			{
				$final_includes .= '<link href="' .$include . '" rel="stylesheet"/>';
			}
		}

		return $final_includes;
	}

	public function view($name, $layouts= array(), $params = array(), $default = true)
	{
		if(is_array($layouts) && count($layouts) >=1)
		{
			foreach ($layouts as $layout_key => $layout)
			{
				$params[$layout_key] = $this->CI->load->view($layout, $params, true);	
			}
		}

		if($default)
		{
			$header_params['layout_title'] = $this->layout_title;
			$header_params['layout_desc'] = $this->layout_desc;
			$this->CI->load->view('layout/header', $header_params);
			$this->CI->load->view($name, $params);
			$this->CI->load->view('layout/footer');
		}

		else
		{
			$this->CI->load->view($name, $params);
		}
	}	

}
?>