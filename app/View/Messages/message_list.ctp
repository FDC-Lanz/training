<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1 class="text-center">Message List</h1>

			<?php echo $this->Html->link('New Message', array('action' => 'newMessage'), array('class' => 'btn btn-primary pull-right')); ?>
			<br>

			<?php foreach($messages as $message) : ?>
				<div class="message-item-wrapper">
			        <?php 
		                $path = Router::url('/', true) . '/img/profiles/';
		            	$img = ($message['Sender']['image']) ? $path.$message['Sender']['image'] : $path.'default.png';
			        ?>
			        <?php if (AuthComponent::user('id') == $message['Message']['from_id']) : ?>
						<div class="message-item-sender">
							<div class="message-item-content">
								<div class="message-item-content-top"><?php echo $message['Message']['content']; ?></div>
								<div class="message-item-content-bottom">
									To: <?php echo $message['Receiver']['name']; ?>
									<span class="pull-right"><?php echo $message['Message']['created']; ?></span>
								</div>
							</div>

							<div class="message-item-img" style="background-image: url(<?php echo $img; ?>)"></div>
						</div>
			        <?php else : ?>
						<div class="message-item-receiver">
							<div class="message-item-img" style="background-image: url(<?php echo $img; ?>)"></div>

							<div class="message-item-content">
								<div class="message-item-content-top"><?php echo $message['Message']['content']; ?></div>
								<div class="message-item-content-bottom">
									From: <?php echo $message['Sender']['name']; ?> 
									<span class="pull-right"><?php echo $message['Message']['created']; ?></span>
								</div>
							</div>
						</div>
			        <?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>	
	</div>
</div>