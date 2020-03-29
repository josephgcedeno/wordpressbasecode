<?php
/**
* @package UICCHEFPLUGIN
*/

/**
Plugin Name: UIC CHEF DEPT PLUGIN
Description: This is for CHEFS DEPT Learning tool.
Version: 1.0.0
Author: Joseph G. Cedeño
Author URI: https://www.facebook.com/JosephGCedeno
*/


defined( 'ABSPATH' ) or die(' You can\t access this fill!');
/*autoload the file by class jd daw, then dili na need mag require once pausab.x*/
require_once dirname(__FILE__) . '/vendor/autoload.php';


function activate_uic_chef_plugin()
{
	Inc\Base\Activate::activate();//to use autoload instead of require once
}
register_activation_hook( __FILE__, 'activate_uic_chef_plugin' );


function deactivate_uic_chef_plugin()
{
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_uic_chef_plugin' );


if (class_exists('Inc\\Init'))
{
	Inc\Init::register_services();
}




 


/*
notes 
		function chefsdept_function()
	{
		return 'peste';
	}
	add_shortcode('example','chefsdept_function'); /*allow shortcode use on page and posts/ makita sa front end
	
		1.) public ma access miske asa pag instantiate

		2.) protected ma access lang inside lang jd sa class pag instantiate nimo dili ma access ang protected nga method or variable. Pero if i extends ang class ngaa naay protected method or variable, who ever instantiate the class nga nag extend sa protected tapos iyahang function kay naka public, then kadtung public function kay gina tawag ang protected class from the extended class. then magamit niya ang protected function.
		 addtion: if ang class nag extend sa isa ka class, then iyahang gi extend nga class ang naa sa constructor kay ma tawag usab pag instantiate.

		3.) private ma access lang inside lang jd sa class. not even extention can access this private methhod or variable.

		static: ma gamit nimo ang mga function or variable without initializating the class!
		note, $this is not usable na! coz wala man na initialize! instead gamit ug class name!
		note, dili ma tawag ang naka static nga function or method by instatiating the class

		Final: Means dili na jd ma extend sa laing class ang naka final nga class
*/
