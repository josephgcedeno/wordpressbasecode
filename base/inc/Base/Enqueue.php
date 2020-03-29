<?php
/**
* @package UICCHEFPLUGIN
*/

namespace Inc\Base;
use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
	public function register()
	{
		/*admin_enqueue_scripts for backend while wp_enqueue_scripts for frontend*/
		add_action('admin_enqueue_scripts',array($this,'enqueue'));//styles
	}
	public function enqueue()
	{
		/*include a style or scripts*/
		wp_enqueue_style('style', $this->plugin_url . 'assets/css/style.css'); //css
		wp_enqueue_script('script', $this->plugin_url . 'assets/js/myscript.js'); //js
	}
}