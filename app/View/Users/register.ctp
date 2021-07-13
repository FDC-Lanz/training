
<div class="container">
	<h1 class="text-center">Register Form</h1>

	<?php echo $this->Form->create('User') ?>
	<div class="form-group">
		<?php echo $this->Form->input('Name', array('class' => 'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $this->Form->input('confirm_password', array('type' => 'password', 'class' => 'form-control')); ?>
	</div>

	<div class="text-center">
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>	
	</div>
</div>