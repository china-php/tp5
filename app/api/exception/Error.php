<?php
/**
 *
 * @author    hemengqiang
 * @version   1.0
 * @since     2017/8/30 下午3:46
 */
namespace app\api\exception;

use Exception;
use think\exception\Handle;
use think\exception\HttpException;
class Error extends Handle
{

    public function render(Exception $e)
    {
        if ($e instanceof HttpException) {
            $statusCode = $e->getStatusCode();
        }
        //TODO::开发者对异常的操作


//        $error = [
//            'code' => $e->getStatusCode(),
//            'msg' => $e->getMessage(),
//        ];

        //echo json_encode($error);
        //exit();
        //可以在此交由系统处理
        return parent::render($e);
    }

}