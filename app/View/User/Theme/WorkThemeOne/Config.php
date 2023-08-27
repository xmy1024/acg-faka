<?php
declare(strict_types=1);

namespace App\View\User\Theme\WorkThemeOne;

use App\Consts\Render;

interface Config
{

    const INFO = [
        "NAME" => "主题1 - 魔改默认主题",
        "AUTHOR" => "祥拓软件",
        "VERSION" => "1.0.0",
        "WEB_SITE" => "https://work100.com.cn",
        "DESCRIPTION" => "魔改默认主题，优化界面",
        "RENDER" => Render::ENGINE_SMARTY
    ];


    /**
     * 配置信息
     */
    const SUBMIT = [
        [
            "title" => "模板风格",
            "name" => "style",
            "type" => "select",
            "dict" => [
//                ["id" => 0, "name" => "会员中心-二次元风(默认)"],
//                ["id" => 1, "name" => "会员中心-商务风"],
                ["id" => 2, "name" => "会员中心-二次元风(高端)"],
            ],
            "placeholder" => "请选择",
            "default" => 2
        ],
        [
            "title" => "缓存",
            "name" => "cache",
            "type" => "switch",
            "text" => "开启",
            "tips" => "浏览器本地缓存，缓存时间60秒"
        ],
        [
            "title" => "缓存时间",
            "name" => "cache_expire",
            "type" => "input",
            "placeholder" => "缓存过期时间，推荐60秒",
            "default" => 60
        ],
        [
            "title" => "快捷充值金额",
            "name" => "quickMoney",
            "type" => "input",
            "tips" => "用英文逗号隔开,如：10,20,30",
            "placeholder" => "用英文逗号隔开",
            "default" => '30,50,100'
        ],
        [
            "title" => "ICP备案号",
            "name" => "icp",
            "type" => "input",
            "placeholder" => "填写后将会在店铺底部显示ICP备案号，不填写则不显示。"
        ],
    ];

    /**
     * 模板文件重定向，不需要修改的直接删除
     */
    const THEME = [
        "INDEX" => "Index/Index.html", //卡网首页
        "CLOSED" => "Index/Closed.html", //维护页面
        "QUERY" => "Index/Query.html", //订单查询
        "LOGIN" => "Authentication/Login.html", //用户登录
        "REGISTER" => "Authentication/Register.html", //用户注册
        "FORGET_EMAIL" => "Authentication/ForgetEmail.html", //用户找回密码-邮箱
        "FORGET_PHONE" => "Authentication/ForgetPhone.html", //用户找回密码-手机
        "RECHARGE" => "User/Recharge.html", //会员-充值中心
    ];

}