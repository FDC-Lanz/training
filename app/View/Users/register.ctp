<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h1 class="text-center">Register Form</h1>

			<?php 
				echo $this->Form->create('User');
				echo $this->Form->input('name', array('class' => 'form-control'));
				echo $this->Form->input('email', array('class' => 'form-control'));
				echo $this->Form->input('password', array('class' => 'form-control'));
				echo $this->Form->input('confirm_password', array('type' => 'password', 'class' => 'form-control'));
				echo $this->Form->button('Submit', array('class' => 'btn btn-primary btn-block')); 
			?>	
		</div>	
	</div>
</div>