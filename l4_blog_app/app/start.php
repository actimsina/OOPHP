<?php 

require_once __DIR__. '/../vendor/autoload.php';

ActiveRecord\Config::initialize(function($conf)
{
	// $conf->set_model_directory('dir_name');
	$conf->set_connections([
		'development' => 'mysql://homestead:secret@localhost/homestead'
		]);
});