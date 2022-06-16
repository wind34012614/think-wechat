<?php
/**
 * @author 读心印 <aa24615@qq.com>
 */

//$path = str_replace('public','',getcwd());
//
//if(!file_exists($path.'/config/wechat.php')){
//    copy(__DIR__.'/config.php',$path.'/config/wechat.php');
//}



// \think\facade\Event::bind( ['LogRecord'=>'Naixiaoxin\ThinkWechat\Behavior\AppInit']);

bind('LogRecord','Naixiaoxin\ThinkWechat\Behavior\AppInit');
