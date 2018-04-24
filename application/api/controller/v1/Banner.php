<?php
/**
 * Created by 随风.
 * User: Administrator
 * Date: 2018/4/5
 * Time: 18:18
 */

namespace app\api\controller\v1;

use app\api\vaildate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    public function getBanner($id){
        (new IDMustBePostiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
//            throw new BannerMissException();
            throw  new Exception('skdhnfkja');
        }
        return $banner;
    }
}