<?php
class Note extends AppModel
{
   var $name = 'Note';
   var $hasAndBelongsToMany = array ('Client', 'Project', 'Task', 'User');
}
?>