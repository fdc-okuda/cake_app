

<h1>New Message</h1>

<?php
echo $this->Form->create(false,array('type'=>'post','url'=>'addRecord'));
echo $this->Form->text("Message.content");

echo $this->Form->submit("Send");
echo $this->Form->end();
?>

<br /><hr><br />

<table>
<?php

for($i = 0;$i < count($data);$i++){
  $arr = $data[$i]['Message'];



  echo "<tr><td>{$arr['id']}</td>";
  echo "<td>{$arr['content']}</td>";
}

?>
</table>


