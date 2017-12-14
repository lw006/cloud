<?php
namespace app\index\controller;
use think\Response;
use think\response\Redirect;
use think\Url;
class Index
{
    public function index()
    {
        return Response::create(Url::build('/admin'), 'redirect');
    }
}
