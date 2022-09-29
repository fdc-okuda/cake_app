<h3>add users</h3>

<?php
echo $this->Form->create('User', array('url' => 'add'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Add');
?>