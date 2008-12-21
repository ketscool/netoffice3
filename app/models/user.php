<?php
class User extends AppModel
{
   var $name = 'User';
   var $belongsTo = array ('Client');
   var $hasMany = array ('Hour');
   var $hasAndBelongsToMany = array ('Project', 'Note');
}
?>