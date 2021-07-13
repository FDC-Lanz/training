<?php echo $this->Flash->render(); ?>

<div class="container">
	<h1 class="text-center">Login Form</h1>

	<?php echo $this->Form->create('User') ?>
	<div class="form-group">
		<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
	</div>

	<div class="text-center">
		<?php echo $this->Form->button('Login', array('class' => 'btn btn-primary')); ?>	
	</div>
</div>