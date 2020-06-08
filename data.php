<?php
/*form1.phpで選択肢で得た情報で、ここでさらに選択肢を表示*/


if(isset($_POST["submit1"])){
   
    echo 'スカッとしたいんですね！さらにジャンルを選んでください！' ;
    
    echo '<br>' ;
    echo '<br>' ;
    
    
    /*data2.phpでhtml形式でフォームタグ作ってそれを呼び出す*/
    
    require_once ('data2.php');
    
    
	}
if(isset($_POST["submit2"])){

		echo 'どんでん返しのある映画ですね！さらにジャンルを選んでください！' ;
		echo '<br>' ;
    	echo '<br>' ;
    
    /*data3.phpフォーム、css呼び出し*/
    require_once ('data3.php') ;
}
if(isset($_POST["submit3"])){

		echo '泣ける映画ですね！さらにジャンルを選んでください！' ;
		echo '<br>' ;
    	echo '<br>' ;
    	
    	/*ここにさらにジャンルを選ぶボタンを配置したいけど、formタグが置けない・・・php文で作れるか調べる！*/
    
    /*data4.phpでhtml形式でフォームタグ作ってそれを呼び出す*/
    require_once ('data4.php') ;

}

?>