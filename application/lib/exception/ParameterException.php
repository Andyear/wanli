<?php
/**
 * Created by 随风.
 * User: Administrator
 * Date: 2018/4/22
 * Time: 13:36
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}