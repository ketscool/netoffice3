		<div id="main">	
		
			<h2><?php __('Projects');?></h2>
			
			<table cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $paginator->sort('title');?></th>
				<th><?php echo $paginator->sort('client_id');?></th>
				<th><?php echo $paginator->sort('service_id');?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($projects as $project):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
				<tr<?php echo $class;?>>
					<td>
						<?php echo $project['Project']['title']; ?>
					</td>
					<td>
						<?php echo $html->link($project['Client']['title'], array('controller'=> 'clients', 'action'=>'view', $project['Client']['id'])); ?>
					</td>
					<td>
						<?php echo $project['Project']['description']; ?>
					</td>
					<td class="actions">
						<?php echo $html->link(__('View', true), array('action'=>'view', $project['Project']['id'])); ?>
						<?php echo $html->link(__('Edit', true), array('action'=>'edit', $project['Project']['id'])); ?>
						<?php echo $html->link(__('Delete', true), array('action'=>'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			
			<?php
			echo $paginator->counter(array(
			'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
			));
			?>
				
			<?php echo $paginator->numbers();?>
			
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
		
			<h3>Actions</h3>			
			<ul>
				<li><?php echo $html->link(__('New Client', true), array('action'=>'add'), array('class' => 'icon client-add')); ?></li>
				<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add'), array('class' => 'icon project-add')); ?> </li>
				<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add'), array('class' => 'icon user-add')); ?> </li>
				<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>

				<li><?php echo $html->link(__('New Project', true), array('action'=>'add'), array('class' => 'icon note-add')); ?></li>
				<li><?php echo $html->link(__('List Clients', true), array('controller'=> 'clients', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Client', true), array('controller'=> 'clients', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Services', true), array('controller'=> 'services', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Service', true), array('controller'=> 'services', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Tasks', true), array('controller'=> 'tasks', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Task', true), array('controller'=> 'tasks', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Hours', true), array('controller'=> 'hours', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Hour', true), array('controller'=> 'hours', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Notes', true), array('controller'=> 'notes', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Uploads', true), array('controller'=> 'uploads', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Upload', true), array('controller'=> 'uploads', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('List Entries', true), array('controller'=> 'entries', 'action'=>'index'), array('class' => 'icon note-add')); ?> </li>
				<li><?php echo $html->link(__('New Entry', true), array('controller'=> 'entries', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
			</ul>
		
		<!-- sidebar ends -->		
		</div>
