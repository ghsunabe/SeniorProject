<div class="addonCombinations form">
<?php echo $this->Form->create('AddonCombination');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Addon Combination', true)); ?></legend>
	<?php
		echo $this->Form->input('trip_id');
		echo $this->Form->input('addon_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trips', true)), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addons', true)), array('controller' => 'addons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon', true)), array('controller' => 'addons', 'action' => 'add')); ?> </li>
	</ul>
</div>