<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\admin_user\edit.html";i:1494314881;s:75:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\template\base.html";i:1494314881;s:86:"E:\Study\cloud.cnfol.hk\public/../application/admin\view\template\javascript_vars.html";i:1494314881;}*/ ?>
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
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>帐号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" <?php if(isset($vo['account'])): ?> value="<?php echo $vo['account']; ?>" readonly <?php else: ?>  placeholder="只能是字母数字下划线" name="account" datatype="/\w+/" nullmsg="请填写帐号" errormsg="帐号只能是字母数字下划线" <?php endif; ?>>
            </div>
            <div class="col-xs-3 col-sm-3"><?php if(isset($vo['account'])): ?><span class="label label-warning radius">不可更改</span><?php endif; ?></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>姓名：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" value="<?php echo isset($vo['realname']) ? $vo['realname'] :  ''; ?>" placeholder="" name="realname" datatype="*" nullmsg="请填写姓名">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <?php if(!isset($vo['password'])): ?>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>密码：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="password" class="input-text" placeholder="请填写6-32位任意字符" name="password" datatype="/^[\w\W]{6,32}$/" nullmsg="请填写密码" errormsg="请填写6-32位任意字符">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">邮箱：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" value="<?php echo isset($vo['email']) ? $vo['email'] :  ''; ?>" placeholder="" name="email" datatype="e" ignore="ignore" errormsg="邮箱格式错误">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">手机：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" value="<?php echo isset($vo['mobile']) ? $vo['mobile'] :  ''; ?>" placeholder="" name="mobile" datatype="m" ignore="ignore" errormsg="手机格式错误">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>状态：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
                <div class="radio-box">
                    <input type="radio" name="status" id="status-1" value="1" datatype="*" nullmsg="请选择状态">
                    <label for="status-1">启用</label>
                </div>
                <div class="radio-box">
                    <input type="radio" name="status" id="status-0" value="0">
                    <label for="status-0">禁用</label>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">备注：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <textarea class="textarea" placeholder="" name="remark" onKeyUp="textarealength(this,100)"><?php echo isset($vo['remark']) ? $vo['remark'] :  ''; ?></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
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
        $("[name='status'][value='<?php echo isset($vo['status']) ? $vo['status'] :  '1'; ?>']").attr("checked",true);

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype:2,
            ajaxPost:true,
            showAllError:true,
            callback:function(ret){
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>