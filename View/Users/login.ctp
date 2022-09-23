<?php

if ($this->Session->check('Message.auth'))
echo $this->Session->flash('auth');
echo $this->Form->create('User', array('url' => 'login'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login');

?>

<br /><a href="/cakephp/users/add">Join</a>