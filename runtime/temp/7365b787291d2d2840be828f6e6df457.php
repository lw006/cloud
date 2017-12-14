<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\admin_node\edit.html";i:1494314881;s:75:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\template\base.html";i:1494314881;s:86:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\template\javascript_vars.html";i:1494314881;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>


<div class="page-container">
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Request::instance()->baseUrl(); ?>">
        <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">
        <input type="hidden" name="pid" value="<?php echo isset($vo['pid']) ? $vo['pid'] :  '0'; ?>">
        <input type="hidden" name="level" value="<?php echo isset($vo['level']) ? $vo['level'] :  '1'; ?>">
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">分组：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="group_id" class="select">
                        <option value="0">未分组</option>
                        <?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): if( count($group_list)==0 ) : echo "" ;else: foreach($group_list as $key=>$group): ?>
                        <option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>标题：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" value="<?php echo isset($vo['title']) ? $vo['title'] :  ''; ?>" placeholder=""
                       name="title" datatype="*" nullmsg="请填写标题">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" value="<?php echo isset($vo['name']) ? $vo['name'] :  ''; ?>" placeholder="" name="name"
                       datatype="/[A-Za-z0-9_]+/" nullmsg="请填写名称" errormsg="名称只能是字母数字下划线">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">类型：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
                <div class="radio-box">
                    <input type="radio" name="type" id="type-1" value="1">
                    <label for="type-1">控制器</label>
                </div>
                <div class="radio-box">
                    <input type="radio" name="type" id="type-0" value="0">
                    <label for="type-0">方法</label>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>排序：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="number" class="input-text" value="<?php echo isset($vo['sort']) ? $vo['sort'] :  '50'; ?>" placeholder=""
                       name="sort" datatype="n" nullmsg="请填写排序" errormsg="只能填写数字">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>状态：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
                <div class="radio-box">
                    <input type="radio" name="status" id="status-0" value="1">
                    <label for="status-0">启用</label>
                </div>
                <div class="radio-box">
                    <input type="radio" name="status" id="status-1" value="0">
                    <label for="status-1">禁用</label>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script>
    $(function () {
        $("[name='status'][value='<?php echo isset($vo['status']) ? $vo['status'] :  '1'; ?>']").attr("checked", true);
        $("[name='type'][value='<?php echo isset($vo['type']) ? $vo['type'] :  '1'; ?>']").attr("checked", true);
        $("[name='group_id']").find("[value='<?php echo isset($vo['group_id']) ? $vo['group_id'] :  '0'; ?>']").attr("selected", true);

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret) {
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>