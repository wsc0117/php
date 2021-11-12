<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//值不能为空，否则返回
include_once 'DBHelper.php';
if (empty($_POST)) {
    return;
}
$userkey = $_POST['userkey'];
$password = $_POST['password'];
$pwd = $_POST['pwd'];
$username = $_POST['username'];
$tel = $_POST['tel'];
$link = connect();
mysqli_set_charset($link, 'utf8');
$sql = "INSERT INTO `userinfo` (userkey,password,pwd,username,tel) VALUES ('$userkey','$password','$pwd','$username','$tel')";
//$sql = "INSERT INTO `userinfo` (userkey,password,pwd,username,email,tel) VALUES ('app','456789','456789','qpp','108@qq.com','17320823115')";
//执行sql语句
//返回值： 如果insert,ipdate,delete  返回 影响的行数或者 false
$r = execSql($sql);
echo $r;



