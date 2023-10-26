<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Template {
		function show($view, $data=array()){
			$CI = & get_instance();
			// Load header
			$CI->load->view('template/header',$data);
			// Load content
			$CI->load->view($view,$data);
			// Load footer
			$CI->load->view('template/footer',$data);
			// Scripts
			$CI->load->view('template/scripts',$data);
		}
	}
	/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
/* é necessário habilitar a classe Template no arquivo Autoload: 
$autoload['libraries'] = array('template'); */
/* Rafael Rodrigo Silveira - 01/01/2020 */