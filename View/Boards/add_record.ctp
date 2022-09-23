<h1>Submission Form</h1>

<?php
echo $this->Form->create(false, array('type'=>'post', 'url'=>'addRecord'));
echo $this->Form->text('Board.name');
echo $this->Form->error('Board.name');
echo $this->Form->text('Board.title');
echo $this->Form->error('Board.title');
echo $this->Form->text('Board.content');
echo $this->Form->error('Board.content');
echo $this->Form->submit('submit');
echo $this->Form->end();
?>