<div class="schools form">
<?php echo $this->Form->create('School');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('School', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('location');
		echo $this->Form->input('office_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Office', true)), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recruiter Meetings', true)), array('controller' => 'recruiter_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recruiter Meeting', true)), array('controller' => 'recruiter_meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Signups', true)), array('controller' => 'signups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('controller' => 'signups', 'action' => 'add')); ?> </li>
	</ul>
</div>