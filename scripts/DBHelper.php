<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//1. 连接mysql数据库
function connect() {
    return $link = mysqli_connect('localhost', 'root', 'root', 'us', 3306);
}

//2. 执行sql语句
//参数$sql string 增删改查语句
//返回值： 如果insert,ipdate,delete  返回 影响的行数或者 false
//        如果select 返回 结果集对象
function execSql($sql) {
    $link = connect();
    if ($link) {
        mysqli_set_charset($link, 'utf8');
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        return $result;
    }
}

//3. 执行select语句，返回一条记录
//参数sql:select语句
//返回值：一维数组
function selectOne($sql) {
    $link = connect();
    $result = execSql($sql);
    $arr = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($link);
    return $arr;
}

//4. 执行select语句，返回多条记录
//参数sql:select语句
//返回值：二维数组
function selectAll($sql) {
    $link = connect();
    $result = execSql($sql);
    $r = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $r[] = $row;
    }
    mysqli_free_result($result);
    mysqli_close($link);
    return $r;
}

