<?php
//内存cookie ，浏览器关闭就消失

setcookie('userInfo[username1]','Aing',strtotime('+7 days'),'/');

setcookie('userInfo[age]',23,strtotime('+7 days'),'/');

setcookie('userInfo[email]','muke@imooc.com',strtotime('+7 days'),'/');

