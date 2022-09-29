<?php
class Personal extends AppModel {
  public $name = 'Personal';
  
  public $validate = array(
    'name' => array(
      'rule' => 'notEmpty',
      'message' => 'Make sure to fill in the name.'
    ),
    'password' => array(
      'rule' => 'notEmpty',
      'message' => 'Make sure to fill in the password.'
    ),
    'comment' => array()
  );

  public function checkNameAndPass($data){
    $n = $this->find('count',array(
      'conditions' => array(
        'Personal.name' => $data['Personal']['name'],
        'Personal.password' => $data['Personal']['password']
      )
    ));
    return $n > 0 ? true : false;
  }
  
}
?>