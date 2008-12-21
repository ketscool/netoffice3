<?php
class Upload extends AppModel {

	var $name = 'Upload';
	var $hasAndBelongsToMany = array ('Project');
}
?>