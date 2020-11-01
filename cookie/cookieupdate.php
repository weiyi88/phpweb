<?php
setcookie('update','Aring1',time()+3600,'/');

//同样的name可以更新cookie  有效路径也要一致 ， 同样name的cookie   /根目录并不会覆盖子目录的cookie
setcookie('update','test',time()+3600,'/');