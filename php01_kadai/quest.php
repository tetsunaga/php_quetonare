<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C's ∀cademy Kyoto に新規御入学者様へのアンケート</title>
</head>
<body>
    <!-- フォームの枠を設定 -->
<table border="1">
<?php
//データの書き込み,$data変数＝関数fileにプログラミング言語をdata.textの引数として扱う
$data=file('data.txt');
for($i=0; $i<count($subject); $i++){ $data[$i]=rtrim($data[$i]); }
//送信ボタンを押して送信した場合のif文
if($_POST['submit']){
	$data[$_POST['lang']]++;
    //ファイルを開く方法と閉じる方法、wは書き、ファイルサイズヲゼロにする
	$fp=@fopen('data.txt','w');
    //for 文
	for($i=0; $i<count($subject); $i++){
		fwrite($fp,$data[$i]."\n");
	}
	fclose($fp);

}
var_dump($data);
//データの出力
// echo"<hr>";
// for($i=0;$i<count(subject);$i++){
//     echo"<tr>";
//     echo"<td>{$subject[$i]}"</td>;
//     echo"<td><table><tr>";
//     $wd=$data[$i]*10;//出力幅の設定
//     echo"<td width='$wd' bgcolor='#eeeeee'></td>";
//     echo"<td>{data[$i]}票</td>";
//     echo "</tr><table></tr>";
//     echo"<tr>\n";
// }
// var_dump($data);
?>    
</body>
</html>