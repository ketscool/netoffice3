		<div id="main">	
		
			<h2><?php __('Edit Project');?></h2>

			<?php echo $form->create('Project');?>
			<?php
				echo $form->input('client_id');
				echo $form->input('title');
				echo $form->input('description');
				echo $form->input('service_id');
			?>
			<?php echo $form->end('Submit');?>
			
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
		
			<h3>Actions</h3>			
			<ul>
				<li><?php echo $html->link(__('List Projects', true), array('action'=>'index'));?></li>
				<li><?php echo $html->link(__('List Clients', true), array('controller'=> 'clients', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Client', true), array('controller'=> 'clients', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Services', true), array('controller'=> 'services', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Service', true), array('controller'=> 'services', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Tasks', true), array('controller'=> 'tasks', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Task', true), array('controller'=> 'tasks', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Hours', true), array('controller'=> 'hours', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Hour', true), array('controller'=> 'hours', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Notes', true), array('controller'=> 'notes', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Uploads', true), array('controller'=> 'uploads', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Upload', true), array('controller'=> 'uploads', 'action'=>'add')); ?> </li>
				<li><?php echo $html->link(__('List Entries', true), array('controller'=> 'entries', 'action'=>'index')); ?> </li>
				<li><?php echo $html->link(__('New Entry', true), array('controller'=> 'entries', 'action'=>'add')); ?> </li>	
			</ul>
		
		<!-- sidebar ends -->		
		</div>
