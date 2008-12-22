		<div id="main">	
		
			<h2><?php echo $client['Client']['title']; ?></h2>
			
			<dl><?php $i = 0; $class = ' class="altrow"';?>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acronym'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $client['Client']['acronym']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $client['Client']['address']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $client['Client']['created']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $client['Client']['modified']; ?>
					&nbsp;
				</dd>
			</dl>
			
			<h3><?php __('Related Projects');?></h3>
			<?php if (!empty($client['Project'])):?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php __('Title'); ?></th>
					<th class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
					$i = 0;
					foreach ($client['Project'] as $project):
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow"';
						}
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $project['title'];?></td>
						<td class="actions">
							<?php echo $html->link(__('View', true), array('controller'=> 'projects', 'action'=>'view', $project['id']), array('class' => 'icon project')); ?> &bull;
							<?php echo $html->link(__('Edit', true), array('controller'=> 'projects', 'action'=>'edit', $project['id']), array('class' => 'icon project-edit')); ?> &bull;
							<?php echo $html->link(__('Delete', true), array('controller'=> 'projects', 'action'=>'delete', $project['id']), array('class' => 'icon project-delete'), sprintf(__('Are you sure you want to delete %s?', true), $project['title'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			
			<h3><?php __('Related Users');?></h3>
			<?php if (!empty($client['User'])):?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php __('Id'); ?></th>
					<th><?php __('Name'); ?></th>
					<th><?php __('Username'); ?></th>
					<th><?php __('Password'); ?></th>
					<th><?php __('Access'); ?></th>
					<th><?php __('Email'); ?></th>
					<th><?php __('Picture'); ?></th>
					<th><?php __('Language'); ?></th>
					<th><?php __('Client Id'); ?></th>
					<th><?php __('Created'); ?></th>
					<th><?php __('Modified'); ?></th>
					<th><?php __('Login'); ?></th>
					<th class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
					$i = 0;
					foreach ($client['User'] as $user):
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow"';
						}
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $user['id'];?></td>
						<td><?php echo $user['name'];?></td>
						<td><?php echo $user['username'];?></td>
						<td><?php echo $user['password'];?></td>
						<td><?php echo $user['access'];?></td>
						<td><?php echo $user['email'];?></td>
						<td><?php echo $user['picture'];?></td>
						<td><?php echo $user['language'];?></td>
						<td><?php echo $user['client_id'];?></td>
						<td><?php echo $user['created'];?></td>
						<td><?php echo $user['modified'];?></td>
						<td><?php echo $user['login'];?></td>
						<td class="actions">
							<?php echo $html->link(__('View', true), array('controller'=> 'users', 'action'=>'view', $user['id'])); ?>
							<?php echo $html->link(__('Edit', true), array('controller'=> 'users', 'action'=>'edit', $user['id'])); ?>
							<?php echo $html->link(__('Delete', true), array('controller'=> 'users', 'action'=>'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			
			<h3><?php __('Related Notes');?></h3>
			<?php if (!empty($client['Note'])):?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php __('Id'); ?></th>
					<th><?php __('Title'); ?></th>
					<th><?php __('Body'); ?></th>
					<th><?php __('Created'); ?></th>
					<th><?php __('Modified'); ?></th>
					<th class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
					$i = 0;
					foreach ($client['Note'] as $note):
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow"';
						}
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $note['id'];?></td>
						<td><?php echo $note['title'];?></td>
						<td><?php echo $note['body'];?></td>
						<td><?php echo $note['created'];?></td>
						<td><?php echo $note['modified'];?></td>
						<td class="actions">
							<?php echo $html->link(__('View', true), array('controller'=> 'notes', 'action'=>'view', $note['id'])); ?>
							<?php echo $html->link(__('Edit', true), array('controller'=> 'notes', 'action'=>'edit', $note['id'])); ?>
							<?php echo $html->link(__('Delete', true), array('controller'=> 'notes', 'action'=>'delete', $note['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
		
			<h3>Actions</h3>			
			<ul>				
				<li><?php echo $html->link(__('Edit Client', true), array('action'=>'edit', $client['Client']['id']), array('class' => 'icon client-edit')); ?> </li>
				<li><?php echo $html->link(__('Delete Client', true), array('action'=>'delete', $client['Client']['id']), array('class' => 'icon client-delete'), sprintf(__('Are you sure you want to delete %s?', true), $client['Client']['title'])); ?> </li>
				<li><?php echo $html->link(__('New Client', true), array('action'=>'add'), array('class' => 'icon client-add')); ?> </li>
				<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add'), array('class' => 'icon project-add')); ?> </li>
				<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add'), array('class' => 'icon user-add')); ?> </li>
				<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add'), array('class' => 'icon note-add')); ?> </li>
			</ul>
		
		<!-- sidebar ends -->		
		</div>