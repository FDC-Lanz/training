<?php echo $this->Flash->render(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-offset-4 col-md-4 ">
			<h1 class="text-center">Login Form</h1>

			<?php 
				echo $this->Form->create('User');
				echo $this->Form->input('email', array('class' => 'form-control'));
				echo $this->Form->input('password', array('class' => 'form-control'));
				echo $this->Form->button('Login', array('class' => 'btn btn-primary btn-block')); 
			?>
		</div>
	</div>
</div>