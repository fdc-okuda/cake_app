<h1>Users</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Users</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
        <?php echo $this->Html->link($user['User']['username'],
            array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td>
            <?php if ($current_user['id'] == $user['User']['id']): ?>
                <?php
                    echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $user['User']['id']),
                        array('confirm' => 'Are you sure?')
                    );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $user['User']['id'])
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Message',
                    array('controller' => 'messages', 
                    'action' => 'index', 
                    'full_base' =>true,
                    $user['User']['id'])
                );
                ?>
                <?php else: ?>
                    
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>