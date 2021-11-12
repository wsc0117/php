<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DBHelper.php';
$sql="SELECT * from userctrl  where id=id";
$rows= selectAll($sql);
echo json_encode($rows);

