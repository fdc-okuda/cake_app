<?php
class Board extends AppModel {
  public $name = 'Board';

  public $validate = array(
    'title' => array(
      'rule' =>'notBlank',
      'message' => 'Make sure to fill in the title.'
    ),
    'content' => array(
      'rule' =>'notBlank',
      'message' => 'Make sure to fill in the content.'
    )
  );

  public $belongsTo = array(
    "Personal" => array(
      'className' => 'Personal',
      'conditions' => '',
      'order' => '',
      'dependent' => false,
      'foreignKey' => 'personal_id'
    )
  );

}
?>