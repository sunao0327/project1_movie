<!--DB接続とデータ取り出し-->
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

$sql = "SELECT movie_no, title FROM movie where genre = 'ミステリー' ORDER BY rand () LIMIT 1";

$result = $mysqli -> query($sql);

//クエリー失敗
if(!$result) {
	echo $mysqli->error;
	exit();
}

//レコード件数
$row_count = $result->num_rows;

//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$rows[] = $row;
}

//結果セットを解放
$result->free();

// データベース切断
$mysqli->close();
 
?>

<!DOCTYPE html>
<html>
<head>
<title>アクション映画から一つ表示</title>
<meta charset="utf-8">
</head>
<body>
<h1>あなたの気分にあったミステリー作品のおすすめ！</h1> 
<?php 
foreach($rows as $row){
?> 
<p>あなたにおすすめの作品は・・・</p><br>
<p>『<?= htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8'); ?>』</p><br>
<p>がおすすめです！</p>

<?php 
} 
?>

</body>
</html>



<!--ここから表示画面
<?php
/*ミステリーを選んだ場合*/
	if (isset ($_POST['kind1'])) {
		
		echo 'どんでん返しのあるミステリー作品ですね！' ;
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("シャッターアイランド", "メメント", "サーチ", "アフタースクール") ;
		$randkey = $array[array_rand( $array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		echo '<br>' ;
		
	}
	if ( isset ($_POST['kind2'])){    /*サスペンスを選んだ場合*/
		
		echo 'どんでん返しのあるサスペンス映画ですね！';
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("ドリームハウス", "ユージュアルサスペクツ", "アイデンティティー", "マシニスト", ) ;
		$randkey = $array[array_rand($array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		
	}
	
	?>
	-->
