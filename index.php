<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-17
 * Time: 15:41
 */
require ('inc/conn.php');
require ('inc/lib.php');
$sql="select * from art where catid=1";
$news=selAll($sql,$conn);
$sql="select * from art where catid=2";
$infos=selAll($sql,$conn);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach($news as $v){?>
    <li>
        <span>(<?php echo $v['pubtime']?>)</span>
        <a href="art.php?id=<?php echo $v['id']?>" target="_blank"><?php echo $v['title']?></a>
    </li>
    <?php } ?>
</ul>
<ul>
    <?php foreach($infos as $v){?>
        <li>
            <span>(<?php echo $v['pubtime']?>)</span>
            <a href="art.php?id=<?php echo $v['id']?>" target="_blank"><?php echo $v['title']?></a>
        </li>
    <?php } ?>
</ul>
</body>
</html>
