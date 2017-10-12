<?php
//API模块下版本号获取
$v = request()->header('version');
if($v==null)
{
    $v = "v1";
}

return [

    '__domain__'=>[
        'www'   => 'home',
        'api'   => [
            ''=>['api/'.$v.'.index/index',['method' => 'get']],

            ':controller/:function$'=>'api/'.$v.'.:controller/:function',
        ]
        // 泛域名规则建议在最后定义
    ],
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],


];
