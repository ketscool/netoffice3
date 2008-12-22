<div class="settings form">
<?php echo $form->create('Setting');?>
	<fieldset>
 		<legend><?php __('Edit Setting');?></legend>
	<?php

Warning: Invalid argument supplied for foreach() in /homepages/40/d89538330/htdocs/tinyforge/cake/console/libs/templates/views/form.ctp on line 32
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Setting.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Setting.id'))); ?></li>
		<li><?php echo $html->link(__('List Settings', true), array('action'=>'index'));?></li>
	</ul>
</div>
