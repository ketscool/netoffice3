<?php
class Project extends AppModel
{
   var $name = 'Project';
   var $belongsTo = array ('Client', 'Service');
   var $hasMany = array ('Task', 'Hour');
   var $hasAndBelongsToMany = array ('User', 'Note', 'Upload', 'Entry');
}
?>