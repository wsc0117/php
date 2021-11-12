<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DBHelper.php';
$selType = $_POST['selType'];
$selVal = $_POST['selVal'];
$sql = "";
if ($selType == "0") {
    $sql = "SELECT * from userctrl  where id=id";
} else {
    $sql = "SELECT * from userctrl  where id=id and {$selType}='{$selVal}'";
}
$rows = selectAll($sql);
echo json_encode($rows);
