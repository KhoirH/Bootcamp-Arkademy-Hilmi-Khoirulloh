<?php
ob_start();
session_start();
spl_autoload_register(function($data){
		require_once 'core/'.$data.".php";
});

$query = new query();
 ?>
