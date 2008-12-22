<div class="entries form">
<?php echo $form->create('Entry');?>
	<fieldset>
 		<legend><?php __('Edit Entry');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('content');
		echo $form->input('access');
		echo $form->input('user_id');
		echo $form->input('ip');
		echo $form->input('revision');
		echo $form->input('accessed');
		echo $form->input('Project');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Entry.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Entry.id'))); ?></li>
		<li><?php echo $html->link(__('List Entries', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
	</ul>
</div>
