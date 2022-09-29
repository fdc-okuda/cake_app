<h1>User Profile</h1><br />

<p>Image<br />


<img src="<?php echo '/cakephp/img/' . $user['User']['filename'] ?>" alt="image" style="height: 100px; height: 100px;">




<p>Name<br /><?php echo h($user['User']['username']); ?></p>
<p>Age<br /><?php echo h($user['User']['age']); ?></p>
<p>Gender<br />
<?php 
if($user['User']['gender'] == 0){
    echo 'Male';
} else {
    echo 'Female';
}; 

?></p>
<p>Birth Date<br /><?php echo h($user['User']['birthdate']); ?></p>
<p>Joined<br /><?php echo h($user['User']['created']); ?></p>
<p>Modified<br /><?php echo h($user['User']['modified']); ?></p>
<p>Hobby<br /><?php echo h($user['User']['hobby']); ?></p>

<?php echo $this->Html->link('back',
            array('controller' => 'users', 'action' => 'index')); ?>
