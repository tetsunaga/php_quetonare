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
    
    // $count = 1;

    // while ($count < 10){
      // 実行する処理
    //   $count++;
    // }
    // echo $count;
    
    
    // for ($count = 0; $count < 10; $count++){
        // 実行する処理
    //   }

    // echo $count;
    // $data=file('data.txt');
    // for($i=0; $i<count($subject); $i++){ $data[$i]=rtrim($data[$i]); }
    //     if($_POST['submit']){
        
    //     $data[$_POST['kyouka']]++;
    //     $fp=@fopen('data.txt','w');
    //     for($i=0; $i<count($subject); $i++){
    //         fwrite($fp,$data[$i]."\n");
    //     }
    //     fclose($fp);
    // }

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
        var_dump($i);



    ?>
    
</body>
</html>