<?php
class Client extends AppModel
{
   var $name = 'Client';
   var $hasMany = array ('Project', 'User');
   var $hasAndBelongsToMany = array ('Note');
}
?>