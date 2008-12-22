<div class="uploads index">
<h2><?php __('Uploads');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('filename');?></th>
	<th><?php echo $paginator->sort('location');?></th>
	<th><?php echo $paginator->sort('access');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('ip');?></th>
	<th><?php echo $paginator->sort('revision');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($uploads as $upload):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $upload['Upload']['id']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['filename']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['location']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['access']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['modified']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['user_id']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['ip']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['revision']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $upload['Upload']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $upload['Upload']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $upload['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['Upload']['id'])); ?>
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
		<li><?php echo $html->link(__('New Upload', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Projects', true), array('controller'=> 'projects', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Project', true), array('controller'=> 'projects', 'action'=>'add')); ?> </li>
	</ul>
</div>
