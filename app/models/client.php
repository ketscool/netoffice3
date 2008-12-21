<?php
class Client extends AppModel
{
   var $name = 'Client';
   var $hasMany = array (
		'Project' => array(  
			'className'  => 'Project',  
			'dependent'  => true), 
		'User'
	);
   var $hasAndBelongsToMany = array ('Note');
}
?>