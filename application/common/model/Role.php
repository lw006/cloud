<?php

//------------------------
// 角色模型
//-------------------------

namespace app\common\model;

use think\Model;

class Role extends Model
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
}