<?php

//测试有效路径

//默认当前路径下
setcookie('testpath','test1',time()+3600);

//根目录
setcookie('testpath2','test2',time()+3600,'/');

setcookie('testpath2','test2',time()+3600);