<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/10/29 Time: 23:13
// +----------------------------------------------------------------------
namespace app\api\model;
use think\Model;

class Danmu extends Model{

    // 设置当前模型对应的完整数据表名称
    protected $table = 'hy_danmu';

    public function addDanmu($danmuArr){

        $res = Danmu::saveAll($danmuArr);

        return $res;
    }


    public function getDanmuId($id){

        $res = Danmu::where('danmu_id', $id)
            ->find();
        return $res;
    }

    public function getDanmuCountDay(){

        $res = Danmu::where('status=0')
            ->whereTime('msg_time', 'd')
            ->count();
        return $res;
    }


    public function getDanmuCountWeek(){

        $res = Danmu::where('status=0')
            ->whereTime('msg_time', 'w')
            ->count();
        return $res;
    }


    public function getDanmuCountTotal(){

        $res = Danmu::where('status=0')
            ->count();
        return $res;
    }


}