<div class="hours index">
<h2><?php __('Hours');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('project_id');?></th>
	<th><?php echo $paginator->sort('service_id');?></th>
	<th><?php echo $paginator->sort('time');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($hours as $hour):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $hour['Hour']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($hour['User']['name'], array('controller'=> 'users', 'action'=>'view', $hour['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($hour['Project']['title'], array('controller'=> 'projects', 'action'=>'view', $hour['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $hour['Hour']['service_id']; ?>
		</td>
		<td>
			<?php echo $hour['Hour']['time']; ?>
		</td>
		<td>
			<?php echo $hour['Hour']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $hour['Hour']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $hour['Hour']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $hour['Hour']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hour['Hour']['id'])); ?>
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
		<li><?php echo $html->link(__('New Hour', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
