<h1>Edit Form</h1>
<br /><a href="/cakephp/boards/index">Back To Top</a>
<br /><br />

<?php
echo $this->Form->create(false,array('type'=>'post'));
echo $this->Form->hidden('Board.id');
echo $this->Form->hidden('Board.personal_id');
echo $this->Form->hidden('Personal.id');
echo $this->Form->hidden('Personal.name');
echo "Name: {$data['Personal']['name']}<br /><br />";
echo "Password: {$this->Form->password('Personal.password')}";
echo $this->Form->error('Personal.password');
echo "Title: {$this->Form->text('Board.title')}";
echo $this->Form->error('Board.title');
echo "Content: {$this->Form->textarea('Board.content')}";
echo $this->Form->error('Board.content');
echo $this->Form->end('Submit')
?>
<br />


