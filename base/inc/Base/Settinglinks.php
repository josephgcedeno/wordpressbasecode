<?php
/**
* @package UICCHEFPLUGIN
*/

namespace Inc\Base;

use \Inc\Base\BaseController;


class SettingLinks extends BaseController
{


	public function register()
	{
		add_filter('plugin_action_links_'. $this->plugin_basename , array($this,'settings_link'));//additional link
	}

	public function settings_link($links)
	{	
		//add custom settings link
		$settings_link='<a href="admin.php?page=uic_chef_plugin">Settings</a>';
		array_push($links, $settings_link);
		return $links;
		
	}
}
