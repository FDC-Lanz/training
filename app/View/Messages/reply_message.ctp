<?php foreach($messages as $message) : ?>
	<div class="message-item-wrapper">
        <?php 
        	$comboID = (AuthComponent::user('id') == $message['Message']['from_id']) ? $message['Message']['to_id'] : $message['Message']['from_id'];
            $path = Router::url('/', true) . '/img/profiles/';
        	$img = ($message['User']['image']) ? $path.$message['User']['image'] : $path.'default.png';
        ?>
        <?php if (AuthComponent::user('id') == $message['Message']['from_id']) : ?>
			<div class="message-item-sender">
				<div class="message-item-content">
					<div class="message-item-content-top"><?php echo $message['Message']['content']; ?></div>
					<div class="message-item-content-bottom">
						<span class="text-danger delete-message" data-id="<?php echo $message['Message']['id'] ?>">Delete</span>
									From: <?php echo AuthComponent::user('name'); ?> To: <?php echo $message['User']['name']; ?>
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
						From: <?php echo $message['User']['name']; ?> To: <?php echo AuthComponent::user('name'); ?>
						<span class="pull-right"><?php echo $message['Message']['created']; ?></span>
					</div>
				</div>
			</div>
        <?php endif; ?>
	</div>
<?php endforeach; ?>