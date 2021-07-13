<div class="container">
	<h1 class="text-center">Profile</h1>

	<div class="profile-wrapper">
		<div class="profile-img">
		    <figure>
		        <?php 
		            $image = AuthComponent::user('image') ? 'profiles/'.AuthComponent::user('image')  : 'profiles/default.png'.AuthComponent::user('image');
		            echo $this->Html->image(
		                $image, array('class' => 'img-responsive'));
		        ?>
		    </figure>
		</div>

		<div class="profile-info">
			<h3><b><?php echo AuthComponent::user('name'); ?></b></h3>
			<h4>Gender: <?php echo AuthComponent::user('gender'); ?></h4>
			<h4>Birthday: <?php echo AuthComponent::user('birthday'); ?></h4>
			<h4>Joined: <?php echo date('F j, Y h:i A', strtotime(AuthComponent::user('created'))); ?></h4>
			<h4>Last Joined: <?php echo date('F j, Y h:i A', strtotime(AuthComponent::user('last_login_time'))); ?></h4>
		</div>

		<div class="profile-hubby">
			<h4>Hubby:</h4>

			<p><?php AuthComponent::user('hubby') ?></p>
		</div>

	    <?php 
	        echo $this->Html->link('Edit Profile', 
	            array('controller' => 'users', 'action' => 'editProfile'),
	            array('class' => 'btn btn-primary btn-block')
	        ); 
	    ?>
	</div>
</div>