<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1 class="text-center">User Profile</h1>

			<div class="profile-wrapper">
				<div class="profile-img">
				    <figure>
				        <?php 
				            $image = AuthComponent::user('image') ? 'profiles/'.AuthComponent::user('image')  : 'profiles/default.png';
				            echo $this->Html->image($image, array('class' => 'img-responsive'));
				        ?>
				    </figure>
				</div>

				<div class="profile-info">
					<h3><b><?php echo AuthComponent::user('name'); ?></b></h3>
					<p><strong>Gender:</strong> 
		                <?php
		                    if (AuthComponent::user('gender') == '1') {
		                        echo 'Male';
		                    } elseif (AuthComponent::user('gender') == '2') {
		                        echo 'Female';
		                    } else {
		                        echo '<i>Not Specified</i>';
		                    }
		                ?>
		            </p>
					<p><strong>Birthday:</strong> <?php echo AuthComponent::user('birthdate'); ?></p>
					<p><strong>Joined:</strong> <?php echo date('F j, Y h:i A', strtotime(AuthComponent::user('created'))); ?></p>
					<p><strong>Last Joined:</strong> <?php echo date('F j, Y h:i A', strtotime(AuthComponent::user('last_login_time'))); ?></p>
				</div>

				<div class="profile-hubby">
					<p>
						<strong>Hubby:</strong><br>
						<?php echo AuthComponent::user('hubby') ?>	
					</p>
				</div>

			    <?php 
			        echo $this->Html->link('Edit Profile', 
			            array('controller' => 'users', 'action' => 'editProfile'),
			            array('class' => 'btn btn-primary btn-block')
			        ); 
			    ?>
			</div>
		</div>	
	</div>
</div>