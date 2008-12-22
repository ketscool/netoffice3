<div class="tasks index">
<h2><?php __('Tasks');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('project_id');?></th>
	<th><?php echo $paginator->sort('created_user_id');?></th>
	<th><?php echo $paginator->sort('assigned_user_id');?></th>
	<th><?php echo $paginator->sort('progress');?></th>
	<th><?php echo $paginator->sort('start');?></th>
	<th><?php echo $paginator->sort('due');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tasks as $task):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $task['Task']['id']; ?>
		</td>
		<td>
			<?php echo $task['Task']['title']; ?>
		</td>
		<td>
			<?php echo $task['Task']['description']; ?>
		</td>
		<td>
			<?php echo $html->link($task['Project']['title'], array('controller'=> 'projects', 'action'=>'view', $task['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $task['Task']['created_user_id']; ?>
		</td>
		<td>
			<?php echo $task['Task']['assigned_user_id']; ?>
		</td>
		<td>
			<?php echo $task['Task']['progress']; ?>
		</td>
		<td>
			<?php echo $task['Task']['start']; ?>
		</td>
		<td>
			<?php echo $task['Task']['due']; ?>
		</td>
		<td>
			<?php echo $task['Task']['created']; ?>
		</td>
		<td>
			<?php echo $task['Task']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $task['Task']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $task['Task']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $task['Task']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $task['Task']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Task', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Notes', true), array('controller'=> 'notes', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Note', true), array('controller'=> 'notes', 'action'=>'add')); ?> </li>
	</ul>
</div>
