<h1>Board</h1>
<br /><a href="/cakephp/boards/add">Add Post</a>
<br /><br />
<table>
<tr><th>Name</th><th>Title</th></tr>
<?php
for($i = 0;$i < count($data);$i++){
  $arr = $data[$i];
  echo "<tr>";
  echo "<td><a href='/cakephp/boards/show2/{$arr['Personal']['id']}'> {$arr['Personal']['name']}</a></td>";
  echo "<td><a href='/cakephp/boards/show/{$arr['Board']['id']}'> {$arr['Board']['title']}</a></td>";
  echo "</tr>";
}
?>
</table>
<br /><a href="/cakephp/users/logout">Logout</a>