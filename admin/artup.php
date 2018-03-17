<?php
/*
 * User: caoru
 * Date: 2018-3-17
 * Time: 09:15
 * 作用:修改文章的表单页面
 *参数:id
 * 问题:把待修改的文章信息.取出来.作为表单的默认值
 */
require("../inc/conn.php");
require("../inc/lib.php");

$id=$_GET['id']+0;
$sql="select * from art where id=$id";
$info=selRow($sql,$conn);
//print_r($info);
$sql = "select * from category";
$list=selAll($sql,$conn);
//print_r($list);
if(!$info){
    echo "参数有误";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布文章页面</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        label{
            display:block;
        }
        input{
            display:block;
        }
    </style>
</head>
<body>
<h1>修改文章</h1>
<form action="artup_ok.php"  method="post">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    <label for="title">文章标题:</label>
    <input type="text" name="title" value="<?php echo $info['title']; ?>" id="title">
    <label for="catid">所属栏目:</label>
    <select name="catid" id="catid">
        <?php foreach ($list as $v){ ?>
        <option value="<?php echo $v['id'];?>"<?php echo $info['catid']==$v['id']?'selected="selected"':''?>><?php echo $v['catname'];?></option>
        <?php } ?>
    </select>
    <label for="content">文章内容</label>
    <textarea id="content" name="content">
<?php echo $info['content']; ?>
    </textarea>
    <input type="submit" value="提交">
</form>
</body>
</html>
