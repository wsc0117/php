<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DBHelper.php';
if (empty($_GET)) {
    return;
}
$ids = $_GET['ids'];
$sql = "delete from userctrl where id in ({$ids})";
$r = execSql($sql);
if ($r) {
    echo 1;
} else {
    echo 0;
}

