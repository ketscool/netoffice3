		<div id="main">	
		
			<h2><?php __('Clients');?></h2>
			
			<table cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $paginator->sort('title');?></th>
				<th><?php echo $paginator->sort('acronym');?></th>
				<th><?php echo $paginator->sort('address');?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($clients as $client):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
				<tr<?php echo $class;?>>
					<td>
						<?php echo $client['Client']['title']; ?>
					</td>
					<td>
						<?php echo $client['Client']['acronym']; ?>
					</td>
					<td>
						<?php echo $client['Client']['address']; ?>
					</td>
					<td class="actions">
						<?php echo $html->link(__('View', true), array('action'=>'view', $client['Client']['id']), array('class' => 'icon client')); ?> &bull;
						<?php echo $html->link(__('Edit', true), array('action'=>'edit', $client['Client']['id']), array('class' => 'icon client-edit')); ?> &bull;
						<?php echo $html->link(__('Delete', true), array('action'=>'delete', $client['Client']['id']), array('class' => 'icon client-delete'), sprintf(__('Are you sure you want to delete %s?', true), $client['Client']['title'])); ?>
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
			</ul>
		
		<!-- sidebar ends -->		
		</div>