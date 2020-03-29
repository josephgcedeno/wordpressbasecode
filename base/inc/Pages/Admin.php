<?php
/**
* @package UICCHEFPLUGIN
*/


namespace Inc\Pages;

use \Inc\Base\BaseController;


class Admin extends BaseController  
{
	

	public function register()
	{
		add_action('admin_menu',array($this,'add_admin_pages'));//page
	}
	public function add_admin_pages()
	{
		add_menu_page(
			'CHEFS plugin', /*Title page*/
			'CHEFS', /*Title sa kilid*/
			'manage_options', /*kinsa maka access admin*/
			'uic_chef_plugin', /*slug*/
			array($this,'admin_index'),/*callback*/
			'dashicons-store', /*icon*/
			 110 /*position*/
		);
	}
	
	public function admin_index()
	{
		require_once $this->plugin_path . 'template/admin.php';
	}
}

