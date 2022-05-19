<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C's ∀cademy Kyoto に新規御入学者様へのアンケート</title>
</head>
<body>あなたの好きなプログラミング言語を選んで投票してください。
<!-- <form name="form" metohd="post" action="quest.php"> -->
<form action="post_quest.php" method="post">
<?php
//ラジオボタンを項目ごとに出力
$subject=array('javascript','PHP','python','C言語','SQL');
//for文で言語の配列に数値がでるようにする
for($i=0; $i<count($subject); $i++){
//ラジオボタンでfor文で生成されたデータを表示   
echo "<input type='radio' name='lang' value='$i'>{$subject[$i]}<br>\n";
}
var_dump($subject);
?>
<br>
<input type="submit" name="submit" value="投票">
</form>

<!-- <br>
<input type="submit" name="submit" value="投票">
</form>
<table border="1">



    
</body>
</html>