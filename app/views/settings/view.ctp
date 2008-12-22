<div class="settings view">
<h2><?php  __('Setting');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>

Warning: Invalid argument supplied for foreach() in /homepages/40/d89538330/htdocs/tinyforge/cake/console/libs/templates/views/view.ctp on line 30
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Setting', true), array('action'=>'edit', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Setting', true), array('action'=>'delete', $setting['Setting']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setting['Setting']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Settings', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Setting', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
