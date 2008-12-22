<div class="projects view">
<h2><?php  __('Project');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Client'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($project['Client']['title'], array('controller'=> 'clients', 'action'=>'view', $project['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($project['Service']['title'], array('controller'=> 'services', 'action'=>'view', $project['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Project', true), array('action'=>'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Project', true), array('action'=>'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Projects', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('action'=>'add')); ?> </li>
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
</div>
<div class="related">
	<h3><?php __('Related Tasks');?></h3>
	<?php if (!empty($project['Task'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Created User Id'); ?></th>
		<th><?php __('Assigned User Id'); ?></th>
		<th><?php __('Progress'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('Due'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Task'] as $task):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $task['id'];?></td>
			<td><?php echo $task['title'];?></td>
			<td><?php echo $task['description'];?></td>
			<td><?php echo $task['project_id'];?></td>
			<td><?php echo $task['created_user_id'];?></td>
			<td><?php echo $task['assigned_user_id'];?></td>
			<td><?php echo $task['progress'];?></td>
			<td><?php echo $task['start'];?></td>
			<td><?php echo $task['due'];?></td>
			<td><?php echo $task['created'];?></td>
			<td><?php echo $task['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'tasks', 'action'=>'view', $task['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'tasks', 'action'=>'edit', $task['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'tasks', 'action'=>'delete', $task['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $task['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Task', true), array('controller'=> 'tasks', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Hours');?></h3>
	<?php if (!empty($project['Hour'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Service Id'); ?></th>
		<th><?php __('Time'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Hour'] as $hour):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hour['id'];?></td>
			<td><?php echo $hour['user_id'];?></td>
			<td><?php echo $hour['project_id'];?></td>
			<td><?php echo $hour['service_id'];?></td>
			<td><?php echo $hour['time'];?></td>
			<td><?php echo $hour['description'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'hours', 'action'=>'view', $hour['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'hours', 'action'=>'edit', $hour['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'hours', 'action'=>'delete', $hour['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Hour', true), array('controller'=> 'hours', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($project['User'])):?>
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
		foreach ($project['User'] as $user):
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

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Notes');?></h3>
	<?php if (!empty($project['Note'])):?>
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
		foreach ($project['Note'] as $note):
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

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Uploads');?></h3>
	<?php if (!empty($project['Upload'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Filename'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Access'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Ip'); ?></th>
		<th><?php __('Revision'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Upload'] as $upload):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $upload['id'];?></td>
			<td><?php echo $upload['filename'];?></td>
			<td><?php echo $upload['location'];?></td>
			<td><?php echo $upload['access'];?></td>
			<td><?php echo $upload['modified'];?></td>
			<td><?php echo $upload['user_id'];?></td>
			<td><?php echo $upload['ip'];?></td>
			<td><?php echo $upload['revision'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'uploads', 'action'=>'view', $upload['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'uploads', 'action'=>'edit', $upload['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'uploads', 'action'=>'delete', $upload['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Upload', true), array('controller'=> 'uploads', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Entries');?></h3>
	<?php if (!empty($project['Entry'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Access'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Ip'); ?></th>
		<th><?php __('Revision'); ?></th>
		<th><?php __('Accessed'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Entry'] as $entry):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entry['id'];?></td>
			<td><?php echo $entry['title'];?></td>
			<td><?php echo $entry['content'];?></td>
			<td><?php echo $entry['access'];?></td>
			<td><?php echo $entry['modified'];?></td>
			<td><?php echo $entry['user_id'];?></td>
			<td><?php echo $entry['ip'];?></td>
			<td><?php echo $entry['revision'];?></td>
			<td><?php echo $entry['accessed'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'entries', 'action'=>'view', $entry['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'entries', 'action'=>'edit', $entry['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'entries', 'action'=>'delete', $entry['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Entry', true), array('controller'=> 'entries', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
