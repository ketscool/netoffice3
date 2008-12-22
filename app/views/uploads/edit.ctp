<div class="uploads form">
<?php echo $form->create('Upload');?>
	<fieldset>
 		<legend><?php __('Edit Upload');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('filename');
		echo $form->input('location');
		echo $form->input('access');
		echo $form->input('user_id');
		echo $form->input('ip');
		echo $form->input('revision');
		echo $form->input('Project');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Upload.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Upload.id'))); ?></li>
		<li><?php echo $html->link(__('List Uploads', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
	</ul>
</div>
