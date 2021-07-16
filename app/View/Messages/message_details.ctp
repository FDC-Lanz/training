<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1 class="text-center">Message Details</h1>

			<div class="reply-wrapper">
				<?php 
					echo $this->Form->create('Message');
					echo $this->Form->hidden('to_id', array('value' => $user['User']['id']));
					echo $this->Form->input('content', array('label' => false, 'placeholder' => 'Write your reply', 'type' => 'textarea', 'class' => 'form-control'));
					echo $this->Form->button('Reply', array('class' => 'btn btn-primary pull-right')); 
				?>
			</div>

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

	        <div class="loading"></div>

	        <?php if ($this->Paginator->params()['count'] > 10) : ?>
	            <div class="text-center" data-count="0" data-total="<?php echo $this->Paginator->params()['count']; ?>">
	                <div class="more-message-details text-center">Load More</div>
	            </div>
	        <?php else : ?>
	            <div class="text-center">
	                <hr>
	                <i>--- nothing follows ---</i>
	            </div>
	        <?php endif; ?>
		</div>	
	</div>
</div>

<script>
    $('body').on('submit', '#MessageMessageDetailsForm', function(e) {
        e.preventDefault();
	    var count = $(this).parent().attr('data-count');
	    var total = $(this).parent().data('total');
	    var limit = 10;
	    count = parseInt(count) + parseInt(limit);
	    $(this).parent().attr('data-count', count);
        var url = "<?php echo $this->Html->url(array('controller' => 'messages', 'action' => 'replyMessage')); ?>";
        var msg = $(this).find('textarea');

        $.ajax({
            url: url,
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                msg.val('');
                $('.message-item-wrapper:first').before(response).show().fadeIn('slow');
                $('.more-message-details').show().text('Load More');
                var row = count + limit;
                
                if (row >= total) {
                    $('.more-message-details').parent().html('<hr><i>--- nothing follows ---</i>');
                    $('.more-message-details').remove();
                }
                return;
            },
            error: function() {
                alert('Error!')
            }
        });
    });

	$('body').on('click', '.more-message-details', function() {
	    var count = $(this).parent().attr('data-count');
	    var total = $(this).parent().data('total');
	    var limit = 10;
	    count = parseInt(count) + parseInt(limit);
	    $(this).parent().attr('data-count', count);
        var url = "<?php echo $this->Html->url(array('controller' => 'messages', 'action' => 'moreMessageDetails', $user['User']['id'])); ?>";

	    $('.more-message-details').hide();
	    
	    $.ajax({
	        url: url,
	        beforeSend: function () {
	            $('.loading').html('<div class="loading text-center"><i>Loading. . .</i></div>');
	        },
	        success: function (response) {
	            setTimeout(function() {
	                $('.message-item-wrapper:last').after(response).show().fadeIn('slow');
	                $('.loading').find('.loading').remove();
	                $('.more-message-details').show().text('Load More');
	                var row = count + limit;
	                
	                if (row >= total) {
	                    $('.more-message-details').parent().html('<hr><i>--- nothing follows ---</i>');
	                    $('.more-message-details').remove();
	                }
	            }, 1500);
	        }
	    });
	});

    $('body').on('click', '.delete-message', function() {
        var id = $(this).data('id');
        var url = '<?php echo $this->Html->url(array('controller' => 'messages', 'action' => 'singleDeleteMessage')); ?>';
        var $this = $(this).parents('.message-item-wrapper');
        
        if (confirm("Delete this message?")) {
            $.post(url, {id: id}, function(data) {
                $this.fadeOut();
            });
        }
        return false;
    });
</script>