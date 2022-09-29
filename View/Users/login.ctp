<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php
    echo $this->Html->link(
        'New User',
        array(
            'controller' => 'users',
            'action' => 'add',
            )
        );
?>
</div>