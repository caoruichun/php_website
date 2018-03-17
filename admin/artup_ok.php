<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-17
 * Time: 11:38
 * 接受修改的信息
 * 吧修改过的信息更新导数据库
 */
require('../inc/conn.php');
require ('../inc/lib.php');
$title=$_POST['title'];
$content=$_POST['content'];
$catid=$_POST['catid']+0;
$id=$_POST['id']+0;

$sql="update art set title='$title',catid=$catid,content='$content' where id=$id";
$rs=mysql_query($sql,$conn);
if(!$rs){
    echo "保存失败".mysql_error();
    exit;
}else{
    echo "修改成功";
    exit;
}