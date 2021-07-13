<div class="container text-center">
    <h1>Welcome!</h1>

    <?php 
        echo $this->Html->link('Back to homepage', 
            array('controller' => 'users', 'action' => 'thankYou'),
            array('class' => 'btn btn-info btn-lg')
        ); 
    ?>
</div>