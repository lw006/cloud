<?php

//------------------------
// 节点验证器
//-------------------------

namespace app\common\validate;

use think\Validate;
use think\Db;

class AdminNode extends Validate
{
    protected $rule = [
        "title|标题"  => "require",
        "name|名称"   => "require|checkNode:1",
        "sort|排序"   => "require",
        "status|状态" => "require",
    ];

    /**
     * 验证节点是否唯一
     */
    protected function checkNode($value, $rule, $data)
    {
        if (isset($data['id']) && $data['id']) $where['id'] = ["neq", $data['id']];
        $where['pid'] = $data['pid'];
        $where['name'] = $data['name'];
        $where['isdelete'] = 0;

        return Db::name("AdminNode")->where($where)->find() ? "节点已经存在" : true;
    }
}