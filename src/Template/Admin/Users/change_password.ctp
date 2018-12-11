<?php 

?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
	</ul>
</nav>
<div class="users form large-9 medium-8 columns content">
	<?= $this->Form->create($user)?>
	<fieldset>
		<legend><?= __('Change Password')?></legend>
		<?php
			echo $this->Form->input('id', ['type' => 'hidden', 'value' => $id]);
			echo $this->Form->input('password');
			echo $this->Form->input('confirm_password', ['type' => 'password']);
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit'))?>
	<?= $this->Form->end() ?>
</div>