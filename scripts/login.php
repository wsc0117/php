<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DBHelper.php';
$link = connect(); //连接数据库
$userkey = $_POST['userkey']; //获取输入框的 name 为 userkey 
$password = $_POST['password'];   //获取输入框的 name 为 password
mysqli_set_charset($link, 'utf8');  //格式改为utf8
$sql = "SELECT * FROM userinfo WHERE userkey='{$userkey}' AND `pwd`='$password'";
//$sql = "SELECT * FROM userinfo WHERE userkey='admin' AND `pwd`=123456";
$result = mysqli_query($link, $sql);
//关联数组
$row = mysqli_fetch_assoc($result); //从结果集中取得一行
if ($row === null) {
    echo '{"code":-3,"msg":"用户名或密码有误"}';
} else {
    $uid = $row['id'];
    $pwd = $row['pwd'];
    echo '{"code":1,"msg":"登录正确","uid":' . $uid . ',"pwd":' . $pwd . '}';
}
session_start();
$_POST['userkey']=$userkey ;


