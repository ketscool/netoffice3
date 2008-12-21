<?php
class Project extends AppModel
{
   var $name = 'Project';
   var $belongsTo = array ('Client', 'Service');
   var $hasMany = array (
		'Task' => array(  
			'className'  => 'Task',  
			'dependent'  => true), 
		'Hour'
	);
   var $hasAndBelongsToMany = array ('User', 'Note', 'Upload', 'Entry');
}
?>