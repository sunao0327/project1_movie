<?php
/*感動を選んだ場合*/
	if (isset ($_POST['kind1'])) {
		
		echo '実話を基にした、感動する映画ですね！' ;
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("しあわせの隠れ場所", "最強のふたり", "グリーンブック", "ボヘミアンラプソディ") ;
		$randkey = $array[array_rand( $array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		echo '<br>' ;
		
	}
	if ( isset ($_POST['kind2'])){    /*サスペンスを選んだ場合*/
		
		echo '家族がテーマの感動する映画ですね！';
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("アバウトタイム", "僕のワンダフルライフ", "幸せへのキセキ", "ワンダー 君は太陽", ) ;
		$randkey = $array[array_rand($array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		
	}
	
	?>