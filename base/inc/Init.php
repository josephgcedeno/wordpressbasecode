<?php

/**
* @package UICCHEFPLUGIN
*/

namespace Inc;


	final class Init
	{
		//will store the classes inside this file of admin.php
		public static function get_services()
		{
			return [
				Pages\Admin::class,
				Base\Enqueue::class,
				Base\Settinglinks::class

			];
		}

		//this will call the method register if the method exists|| RAG MAIN
		public static function register_services()
		{			
			 //self instantiate itself then call method get_services 
			foreach ( self::get_services() as $class)
			{
				$service=self::instantiate($class);//class name stored in service variable
				if (method_exists($service,'register'))  //2nd param is the method of the class
				{
					$service->register();
				}
			}
		}

		//this will simply instantiate the classes
		private static function instantiate($class)
		{	
			
			$service = new $class();
			return $service;
		}
	}






/*
	use Inc\Activate;
	use Inc\Deactivate;
	use Inc\Admin\AdminPages;



	class chefPluggin  
	{
			

		

			public function create_post_type()
			{
				add_action('init',array($this,'custom_post_type'));
			}

		
			public function custom_post_type()
			{
				register_post_type(
					'book',
					array(
					 'public'=>true,
					 'label'=>'books'
					)
				);

			}
			
			public function active()
			{	
				
				Activate::activate();
			}
		
	}


	$cdup= new chefPluggin();
	$cdup->register_backend_scripts();
	$cdup->create_post_type();


			 					     //classname,class function
	register_activation_hook(__FILE__,array($cdup,'active'));
	register_deactivation_hook(__FILE__,array('Deactivate','deactivate'));
	/*class name dayun from inc Deactive.php tas function*/
	/*uninstall*/
	//register_uninstall_hook(__FILE__,array($cdup,'uninstall'));*/