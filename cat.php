<?php

/**
 * 显示某栏目下的所有文章
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-17
 * Time: 15:41
 */
require ('inc/conn.php');
require ('inc/lib.php');
$cid=$_GET['cid'];
$sql="select * from art where catid=$cid";
$list=selAll($sql,$conn);
print_r($list);
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
        <?php foreach ($list as $v){ ?>
        <li>
            <span>[<?php echo $v['pubtime'];?>]</span>
            <a href="art.php?id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a>
        </li>
        <?php } ?>
    </ul>
</body>
</html>
