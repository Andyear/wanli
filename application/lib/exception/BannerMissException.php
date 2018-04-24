<?php
/**
 * Created by 随风.
 * User: Administrator
 * Date: 2018/4/13
 * Time: 14:46
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}