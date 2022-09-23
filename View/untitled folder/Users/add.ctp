<h2>Add a User</h2>
<?php
echo $this->Form->create('User', array('url'=>'add'));
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('Create a User');
?>
