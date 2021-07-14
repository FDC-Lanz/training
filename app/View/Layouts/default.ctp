<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

        echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
        echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
        echo $this->Html->css('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
		echo $this->Html->css('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css');
        echo $this->Html->css('override.css');

		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
        echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');   
        echo $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js');
		echo $this->Html->script('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js');
	?>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">FDC Training</a>
            </div>

            <ul class="nav navbar-nav">
                <?php if ($this->Session->read('Auth.User')): ?>
	                <li class="">
	                    <?php  
	                    	echo $this->Html->link('Message List', array('controller' => 'messages', 'action' => 'messageList'));
	                    ?>
	                </li>              
                <?php endif; ?>
            </ul>

            <?php if ($this->Session->read('Auth.User')): ?>
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ucwords(AuthComponent::user('name')); ?><span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                        <li>
	                            <?php 
	                            	echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'profile'));
	                            ?>
	                        </li>  
	                        <li>
			                    <?php                        
			                        echo $this->Html->link("Logout",
			                            array('controller' => 'users', 'action' => 'logout'),
			                            array('escape' => false)                    
			                        ); 
			                    ?>
	                        </li>                      
	                    </ul>
	                </li>
	            </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>    
                        <?php                        
                            echo $this->Html->link("Register",
                                array('controller' => 'users', 'action' => 'register'),
                                array('escape' => false)                    
                            ); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            echo $this->Html->link("Login",
                                array('controller' => 'users', 'action' => 'login'),
                                array('escape' => false)                    
                            ); 
                        ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
	<div id="container">		
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
