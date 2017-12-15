<?php

//------------------------
// 分组模型
//-------------------------

namespace app\common\model;

use think\Model;

class Group extends Model
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    /**
     * 列表
     */
    public function getList($field = 'id,name', $where = 'isdelete=0 AND status=1')
    {
        return $this->field($field)->where($where)->select();
    }
}