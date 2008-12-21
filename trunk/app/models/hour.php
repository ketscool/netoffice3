<?php
class Hour extends AppModel
{
   var $name = 'Hour';
   var $belongsTo = array ('Project', 'User');
}
?>