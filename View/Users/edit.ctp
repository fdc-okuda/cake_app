
<h1>Edit Users<h1>

<?php

        echo $this->Form->create('User', array('type' => 'file', 'method' =>'Post', 'enctype' => 'multipart/form-data'));
        // echo $this->Form->file('attachment'); 
        echo $this->Form->input('front_image', array(
            'label' => 'image',
            'type' => 'file', 
            'name' => 'front_image'
        ));
        echo $this->Form->input('username');
        echo $this->Form->input('birthdate', array('type' => 'date'));
        echo $this->Form->input('age', array('type' => 'number'));
        echo $this->Form->input('gender', array(
            'Male' => '--Male--',
            'Female' => '--Female--',
            'options' => array('Male', 'Female'),
            'type' => 'radio'
        ));
        echo 'Hobby';
        echo $this->Form->textarea(
            'hobby', 
            array('rows' => '5', 'cols' => '5')
        );
        echo $this->Form->create('id', array('type' =>'hidden'));
        echo $this->Form->end('Save', array('name' => 'save'));

        

    ?>
