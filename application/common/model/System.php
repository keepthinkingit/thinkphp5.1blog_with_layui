<?php
/**
 * Created by PhpStorm.
 * User: JustThinkIt
 * Date: 2018/9/19
 * Time: 18:11
 */
namespace app\common\model;
use think\Model;

class System extends Model
{
    protected $autoWriteTimestamp = true;
    protected $pk = 'id';  //5.1 不会自动获取模型主键,必须设置此属性
    protected $table = 'system';  //与模型类的名称不同需要独立设置

    // protected function getCreateTimeAttr($create_time)
    // {
    //     return date('Y-m-d H:i:s', $create_time);
    // }
    //
    // protected function getUpdateTimeAttr($update_time)
    // {
    //     return date('Y-m-d H:i:s', $update_time);
    // }

}