<?php
class Task extends AppModel
{
   var $name = 'Task';
   var $belongsTo = array ('Project');
   var $hasAndBelongsToMany = array ('Note');
}
?>