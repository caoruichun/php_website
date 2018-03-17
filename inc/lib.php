<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-16
 * Time: 11:14
 * 封装查询函数
 */
//查询所有数据
function selAll($sql,$conn){
    $rs=mysql_query($sql,$conn);
    if(!$rs){
        showError();
    }
    $list=array();
    while($row=mysql_fetch_assoc($rs)){
        $list[]=$row;
    }
    return $list;
}
//查询一行数据
function selRow($sql,$conn){
    $rs=mysql_query($sql,$conn);
    if(!$rs){
        showError();
    }
    return mysql_fetch_assoc($rs);
}
//封装失败函数
function showError(){
    echo "查询失败".mysql_error();
    exit;
}