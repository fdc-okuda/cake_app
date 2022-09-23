<h2>View all Users</h2>
<?php echo $this->Session->flash(); ?>
<table>
    <tr>
        <th>title</th>
        <th>body</th>
        <th>actions</th>
    </tr>
    <?php foreach($users as $user){ ?>
    <tr>
        <td><?php echo $this->Html->link($user['User']['title'], array('action'=>'view', $user['User']['id'])); ?></td>
        <td><?php echo $user['User']['body']; ?></td>
        <td><?php echo $this->Html->link('Edit', array('action'=>'edit', $user['User']['id'])); ?>
            <?php echo $this->Html->link('Delete', array('action'=>'delete',  $user['User']['id'], NULL, 'Sure?')); ?>
        </td>
    </tr>
   <?php } ?>
</table>

<p><?php echo $this->Html->link("Add a User", array('action'=>'add')); ?></p>