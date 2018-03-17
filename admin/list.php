<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-16
 * Time: 11:10
 * 显示所有文章
 */
require ('../inc/conn.php');
require ('../inc/lib.php');
$sql='select * from art';
//$sql="select art.id,art.title,category.catname from art left join category on art.catid=category.id";
$list=selAll($sql,$conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章列表</title>
</head>
<body>
<h1>文章列表</h1>
<table border="1">
    <tr>
        <td>所属栏目</td>
        <td>文章标题</td>
        <td>发布时间</td>
        <td>操作</td>
    </tr>
    <?php foreach ($list as $v) { ?>
    <tr>
        <?php $t=$v['pubtime']; ?>
        <td><?php echo $v['catid']; ?></td>
        <td><?php echo $v['title']; ?></td>
        <td><?php echo @date("Y-m-d H:i:s",$t); ?></td>
        <td>
            <a href="artup.php?id=<?php echo $v['id'] ?>">编辑</a>
            &nbsp;&nbsp;
            <a href="artdel.php?id=<?php echo $v['id'] ?>">删除</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>