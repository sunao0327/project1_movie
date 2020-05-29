<?php
require_once ('data21_2.php') ;
?>



<?php
/*アクション大作を選んだ場合*/
	if (isset ($_POST['kind1'])) {
		
		echo 'スカッとするアクション大作ですね！' ;
		echo '<br>' ;
		echo '<br>' ;
		
		/*
		$array = array ("アベンジャーズ", "トランスフォーマー", "キングスマン", "マグニフィセントセブン") ;
		$randkey = $array[array_rand( $array)] ;
		*/
		
		/*echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; */
		echo '<br>' ;
		echo ' あなたへのおすすめは' ;
		echo '<br>' ;
		/*dbからランダムで表示する*/
		echo htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8');
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		echo '<br>' ;
		
	}
	if ( isset ($_POST['kind2'])){    /*人間ドラマを選んだ場合*/	  
	  
		echo 'スカッとする人間ドラマの映画ですね！';
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("８マイル", "リトルミスサンシャイン ", "イエスマン", "コーチカーター", ) ;
		$randkey = $array[array_rand($array)] ;
		
		echo 'あなたへのおすすめは『 ' . $randkey . '』!' ; 
		echo '<br>' ;
		echo '<br>' ;
		echo 'ちょっと違う・・・別の作品を表示する';
		
	}
	
	?>