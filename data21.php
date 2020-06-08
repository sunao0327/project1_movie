<?php
require_once ('data21_2.php');

/*アクション大作を選んだ場合*/
	if (isset ($_POST['kind1'])) {
		
		echo 'スカッとするアクション大作ですね！' ;
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
	/*人間ドラマを選んだ場合*/
	if ( isset ($_POST['kind2'])){    	  
	  require_once ('data21_3.php');
		echo 'スカッとする人間ドラマの映画ですね！';
		echo '<br>' ;
		echo '<br>' ;
		
		$array = array ("８マイル", "リトルミスサンシャイン ", "イエスマン", "コーチカーター", ) ;
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
	
