<?php

header('content-type:text/html;charset=utf-8');

//开启会话
session_start();

//设置数据

$_SESSION['name']='Aring';

$_SESSION['email']='tantubping@163.com';

$_SESSION['age']=23;

echo 'session的名字:',session_name(),'<br/>';

echo 'session的ID:',session_id(),'<br/>';

