<h1>Submission Form</h1>
<br /><a href="/cakephp/boards/index">Back to Top</a>
<br /><br />

<?php
echo $this->Form->create(false,array('type'=>'post'));
echo 'Name:' . $this->Form->text('Personal.name');
echo $this->Form->error('Personal.name');
echo 'Password:' . $this->Form->password('Personal.password');
echo $this->Form->error('Personal.password');
echo 'Title:' . $this->Form->text('Board.title');
echo $this->Form->error('Board.title');
echo 'Content:' . $this->Form->textarea('Board.content');
echo $this->Form->error('Board.content');
echo $this->Form->end("Submit")
?>

<br /><br />