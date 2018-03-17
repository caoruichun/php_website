<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-15
 * Time: 17:54
 */
//print_r($_POST);

require('../inc/conn.php');

$title=$_POST['title'];
$catid=$_POST['catid']+0;
$content=$_POST['content'];
$pubtime=time();//time()函数在php中取得当前的时间戳
$sql="insert into art (title,catid,content,pubtime) values('$title',$catid,'$content',$pubtime)";
$rs=mysql_query($sql,$conn);
if(!$rs){
    echo '发布失败';
    exit;
}else{
    echo "发布成功";
    exit;
}

