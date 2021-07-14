<?php echo $this->Flash->render(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1 class="text-center">Edit User Profile</h1>

			<?php echo $this->Form->create('User', array('type' => 'file')) ?>
			<div class="profile-wrapper">
				<div class="profile-img">
				    <figure>
				        <?php 
				            $image = AuthComponent::user('image') ? 'profiles/'.AuthComponent::user('image')  : 'profiles/default.png';
				            echo $this->Html->image($image, array('class' => 'img-responsive user-profile'));
				        ?>
				    </figure>		    
				</div>

				<div class="profile-info">
					<?php echo $this->Form->input('user_image', array('type' => 'file','class' => 'form-control edit-profile')); ?>
				</div>

				<div class="profile-hubby">
					<?php 
						echo $this->Form->input('name', array('class' => 'form-control', 'value' => AuthComponent::user('name')));
						echo $this->Form->input('birthdate', array('id' => 'datepicker', 'type' => 'text', 'class' => 'form-control', 'value' => AuthComponent::user('birthdate')));
						echo $this->Form->input('gender', 
	                        array(
	                        	'separator' => '<div class="gender"></div>',
	                            'type' => 'radio', 
	                            'options' => array(1 => 'Male', 2 => 'Female'),
	                            'value' => AuthComponent::user('gender'),
	                        )
						); 
						echo $this->Form->input('hubby', array('type' => 'textarea', 'class' => 'form-control', 'value' => AuthComponent::user('hubby')));
			    		echo $this->Form->button('Update', array('class' => 'btn btn-primary btn-block')); 
			    	?>
				</div>
			</div>
		</div>	
	</div>
</div>

<script>
    $('#datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });

    $('body').on('change', '.edit-profile', function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.user-profile').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }
    });
</script>