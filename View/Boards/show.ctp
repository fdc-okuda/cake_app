<h1>Board</h1>
<br /><a href="/cakephp/boards/index">Back to Top</a>
<br /><br />
<table>
<?php

echo "<tr><th>Name</th><td>{$data[0]['Personal']['name']}</td></tr>";
echo "<tr><th>Titile</th><td>{$data[0]['Board']['title']}</td></tr>";
echo "<tr><th>Content</th><td>{$data[0]['Board']['content']}</td></tr>";
$id = $data[0]['Board']['id'];

?>
</table>
<br /><a href="/cakephp/boards/edit/<?php echo $id; ?>">
  Edit This Post</a><br />
