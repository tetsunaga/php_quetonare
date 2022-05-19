<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//データの書き込み
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
var_dump($_POST);
?>

    
</body>
</html>