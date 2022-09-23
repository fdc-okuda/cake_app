<?php echo $this->Session->flash(); ?>

<h2><?php echo $user['User']['title']; ?></h2>

<p><?php echo $user['User']['body']; ?></p>

<p><small>
Created on: <?php echo $user['User']['created']; ?>
Modified on: <?php echo $user['User']['modified']; ?>
</small></p>

<br/>

<p><?php echo $this->Html->link('Back', array('action'=>'index')); ?></p>
<p><?php echo $this->Html->link('Edit', array('action'=>'edit', $user['User']['id'])); ?></p>
<p><?php echo $this->Html->link('Delete', array('action'=>'delete', $user['User']['id'])); ?></p>