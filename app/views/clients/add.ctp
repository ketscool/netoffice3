<div class="clients form">
<?php echo $form->create('Client');?>
	<fieldset>
 		<legend><?php __('Add Client');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('acronym');
		echo $form->input('address');
		echo $form->input('Note');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Clients', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Notes', true), array('controller'=> 'notes', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add')); ?> </li>
	</ul>
</div>
