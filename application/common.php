<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * ajax 返回数据
 * @param $code
 * @param string $msg
 */
function ajaxRes($code, $msg = '保存成功'){
    header('content-type:application/json;charset=utf-8');

    $arr = array(
        'code' => $code,
        'message' => $msg
    );
    die(json_encode($arr));
}
