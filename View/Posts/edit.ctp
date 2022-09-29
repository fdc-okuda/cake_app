<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->create('body', array('rows' => '3'));
echo $this->Form->create('id', array('type' =>'hidden'));
echo $this->Form->end('Save Post');
?>