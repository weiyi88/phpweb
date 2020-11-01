<?php
    if (!isset($_COOKIE['username'])||!isset($_COOKIE['auth'])){

        exit(
            "
            <script>
            alert('请您先登录后访问');
            location.href='login'.php;
            </script>;
            "
        );
    }
    //校验用户登录凭证
    $auth=$_COOKIE['auth'];
    //以：为分割符号切割字符串，转成数组
    $resArr=explode(':',$auth);
    $user_id=end($resArr);//取出数组最后
   /**
    * 根据user_id搜出相关用户数据
    * 然后根据加密原则（加上令牌，可选可不选）
    * 再与Cookie中的auth字段判断（会话cookie，过期时间内都可以直接访问）
    * 正确直接跳转
    * */
   


