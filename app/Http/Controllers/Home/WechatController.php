<?php

namespace App\Http\Controllers\Home;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;

use Overtrue\Wechat\Server;
use Log;

class WechatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @param Overtrue\Wechat\Server $server
     *
     * @return string
     */
    public function serve(Server $server)
    {
        dd($server);
        $server->on('message', function($message){
            return "欢迎关注 我爱艺术课！";
        });

        return $server->serve(); // 或者 return $server;
    }
}
