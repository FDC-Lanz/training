<div class="container">
	<h1 class="text-center">New Message</h1>

	<?php 
        echo $this->Form->create('Message');
	    echo $this->Form->input('to_id', array('class' => 'form-control get-users'));
	    echo $this->Form->input('content', array('label' => false, 'placeholder' => 'Write your message', 'type' => 'textarea', 'class' => 'form-control'));
	    echo $this->Form->button('Send Message', array('class' => 'btn btn-primary')); 
    ?>
</div>

<script>
    $('.get-users').select2({
        placeholder: 'Search recipient...',
        ajax: {
            url: '<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'getUsers')); ?>',
            type: 'GET',
            dataType: 'json',
            delay: 250,
            data: function (data) {
                return {
                    key: data.term
                };
            },
            processResults: function (response) {
            	console.log(response)
                return {
                    results: response
                };
            }
        },
        templateResult: UserWithImage,
    });
    
    function UserWithImage(user) {
        if (user.loading) {
            return user.text;
        }
        var $html = $(`<div><img width="30" src="<?php echo Router::url('/', true); ?>/img/profiles/${user.image}"/> ${user.text}</div>`);

        return $html;
    }
</script>