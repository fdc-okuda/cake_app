<h1>Message List</h1>

<?php echo $this->Form->create('User', ['method' => 'post']); ?>
    <filedset>
        <?php echo $this->Form->input('message', ['type'=>'textarea']); ?>
        <?php echo $this->Form->input('user_id', ['type'=>'number']); ?>
        <?php echo $this->Form->input('target_id', ['type'=>'number']); ?>
    </filedset>
<?php echo $this->Form->end('Save'); ?>

