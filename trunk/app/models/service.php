<?php
class Service extends AppModel
{
   var $name = 'Service';
   var $hasMany = array ('Project');
}
?>