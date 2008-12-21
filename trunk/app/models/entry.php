<?php
class Entry extends AppModel {

	var $name = 'Entry';
	var $hasAndBelongsToMany = array ('Project');
}
?>