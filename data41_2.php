<?php

//データベース接続
$server = "localhost";  
$userName = "movie_user"; 
$password = "movie_pass"; 
$dbName = "project";
 
$mysqli = new mysqli($server, $userName, $password,$dbName);
 
if ($mysqli -> connect_error){
	echo $mysqli -> connect_error;
	exit(); 
}else{
	$mysqli->set_charset("utf-8");
}
//処理
$sql = "SELECT movie_no, title FROM movie where genre = 'nonfiction' ORDER BY rand () LIMIT 1";

$result = $mysqli -> query($sql);

if(!$result) {
	echo $mysqli->error;
	exit();
}


$row_count = $result->num_rows;


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$rows[] = $row;
}

$result->free();


$mysqli->close();
 
?>

<!--
<!DOCTYPE html>
<html>
<head>
<title>アクション映画から一つ表示</title>
<meta charset="utf-8">
</head>
<body>
<h1>アクション映画から一つのタイトルを表示</h1> 

レコード件数：<?php echo $row_count; ?>

<table border='1'>
<tr><th>id</th><th>title</th></tr>

<?php 
foreach($rows as $row){
?> 

<tr> 
	<td><?php echo $row['movie_no']; ?></td> 
	<td><?php echo htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8'); ?></td> 
</tr> 
<?php 
} 
?>
 
</table>

</body>
</html>
-->