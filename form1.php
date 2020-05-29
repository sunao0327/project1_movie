<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="content-language" content="ja">
     <title>今日の気分に合った映画を見よう！</title>
    <style>
    body {
		background-color: #DBDBDB;
	}
    
    h2{
    	color : black ;
    }
    p{
    	font-size:20px;
    }
    
    .shadow1{
    	display: inline-block;
  		border-radius: 5px;
  		background-color: black;
  		padding: 15px;
  		text-align: center;
  		color: white;
  		width: 200px;
  		font-size: 30px;
    }
    </style> 
</head>
<body>
<h1 style="color:black">今日の気分に合った映画を見よう！</h1>
</br>
</br>
<p>このサイトでは、今日のあなたの気分や、観たい映画のジャンルから、おすすめの映画をピックアップします！！</p>
<h2>今日はどんな映画が見たいですか？？</h2>
</br>
<form  method = "POST" action = "data.php">

	<button  type = "submit" name = "submit1" value = "スカッとしたい！"  class = "shadow1">
	スカッとしたい！
	</button>
	<button type = "submit" name = "submit2"  value = "どんでん返し系が見たい！" class = "shadow1">
	どんでん返し系が見たい！
	</button>
	<button type = "submit" name = "submit3" value = "感動したい！！" class = "shadow1">
	感動したい！！
	</button>
</form>
<br>
<br>
<h2>俳優とみたい作品の雰囲気から作品を検索する<h2>
</body>
</html>

		