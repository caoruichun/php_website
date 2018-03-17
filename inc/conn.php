<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-16
 * Time: 10:30
 * 连接数据库
 */
$conn=mysql_connect('localhost','root','root');
if(!$conn){
    echo "连接失败";
    exit;
}
$mql='use ndac';
mysql_query($mql,$conn);
