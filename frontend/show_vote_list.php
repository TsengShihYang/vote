<h1>列出所有問題</h1>

<?php
$subjects=all('topics');
echo "<ol>";
foreach ($subjects as $key => $value){
if (rows('options',['topic_id'=>$value['id']]) > 0){

echo "<li>";
echo "<a href='?do=vote&id={$value['id']}'>";
echo $value['topic'];
echo "</a>";
echo "</li>";
}
}
echo "</ol>";

?>
