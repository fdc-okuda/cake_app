<h2>Edit User</h2>

<?php
echo $this->Form->create('User', array('url'=>'edit/'. $id));
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('Edit User');
?>