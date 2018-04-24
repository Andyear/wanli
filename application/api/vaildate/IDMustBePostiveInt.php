<?php
/**
 * Created by 随风.
 * User: Administrator
 * Date: 2018/4/13
 * Time: 14:24
 */

namespace app\api\vaildate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

    protected function isPostiveInteger($value, $rlue = '', $data = '', $field = ''){
        if (is_numeric($value) && is_int($value + 0 ) && ($value + 0) > 0){
            return true;
        }
        else{
            return $field.'必须是正整数！';
        }
    }
}