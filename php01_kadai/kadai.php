<html>
<head>
<title>アンケート</title>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
</head>
<body>あなたの好きなプログラミング言語を選んで投票してください。
<form name="form" method="post" action="questionnaire.php">
<?php
//ラジオボタンを項目ごとに出力
$subject=array('javascript','PHP','python','C言語','SQL');
for($i=0; $i<count($subject); $i++){
echo "<input type='radio' name='kyouka' value='$i'>{$subject[$i]}<br>\n";
}
?>
<br>
<input type="submit" name="submit" value="投票">
</form>
<!-- フォームの枠を設定 -->
<table border="1">
<?php
//データの書き込み,$data変数＝関数fileにプログラミング言語を
$data=file('data.txt');
for($i=0; $i<count($subject); $i++){ $data[$i]=rtrim($data[$i]); }
if($_POST['submit']){
	$data[$_POST['kyouka']]++;
	$fp=@fopen('data.txt','w');
	for($i=0; $i<count($subject); $i++){
		fwrite($fp,$data[$i]."\n");
	}
	fclose($fp);
}
//データの出力
echo "<hr>";
for($i=0; $i<count($subject); $i++){
	echo "<tr>";
	echo "<td>{$subject[$i]}</td>";
	echo "<td><table><tr>";
	$wd=$data[$i]*10; //出力幅の設定
	echo "<td width='$wd' bgcolor='#eeeeee'> </td>";
	echo "<td>{$data[$i]} 票</td>";
	echo "</tr></table></td>";
	echo "</tr>\n";
}
var_dump($data);
?>
</table>
</body>
</html>