<?php
setcookie('a','aaa',time()+10);
setcookie('b','bbb',time()+15);
setcookie('c','ccc',time()+20);
setcookie('d','ddd',time()+3600);

//一周内可以登录   写入硬盘的，除非手动删除
setcookie('auth',true,time()+7*24*60*60);
//同样一周内可登录
setcookie('autolongin',true,strtotime('+7 days'));