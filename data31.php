<?php
require_once ('data31_2.php');

/*ミステリーを選んだ場合*/
	if (isset ($_POST['kind1'])) {
		
		echo 'どんでん返しのあるミステリー作品ですね！' ;
		echo '<br>' ;
		echo '<br>' ;
		echo '<br>' ;
		echo ' あなたへのおすすめは' ;
		echo '<br>' ;
		echo '<br>' ;
		/*dbからランダムで表示する*/
		echo '『' . htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') . '』';
		echo '<br>' ;
		echo '<br>' ;
		echo 'がおすすめです！';
		echo '<br>' ;
		/*
		echo 'ちょっと違う・・・別の作品を表示する';
		echo '<br>' ;
		*/
	}
	/*サスペンスを選んだ場合*/
	if ( isset ($_POST['kind2'])){    	  
	  require_once ('data31_3.php');
		echo 'どんでん返しのあるサスペンス映画ですね！';
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("マシニスト", "ピエロがお前を嘲笑う" ,"ドリームハウス") ;
		$randkey = $array[array_rand($array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo '<br>' ;
		echo 'がおすすめです！';
		echo '<br>' ;
		
		echo 'ちょっと違う・・・別の作品を表示する';
		echo '<br>' ;
		echo '『' . htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') . '』';

	}
	
?>
