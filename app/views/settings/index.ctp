<div class="settings index">
<h2><?php __('Settings');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>

Warning: Invalid argument supplied for foreach() in /homepages/40/d89538330/htdocs/tinyforge/cake/console/libs/templates/views/index.ctp on line 37
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($settings as $setting):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>

Warning: Invalid argument supplied for foreach() in /homepages/40/d89538330/htdocs/tinyforge/cake/console/libs/templates/views/index.ctp on line 52
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $setting['Setting']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $setting['Setting']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $setting['Setting']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setting['Setting']['id'])); ?>
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
		<li><?php echo $html->link(__('New Setting', true), array('action'=>'add')); ?></li>
	</ul>
</div>
