<?php $this->layout = 'full-width'?>
<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Page', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('short_title');
		echo $this->Form->input('title');
		echo $this->Form->input('slug');
		echo $this->Form->input('contents');
		echo $this->Form->input('sidebar_contents');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keywords');
		echo $this->Form->input('location_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Page.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Page.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>