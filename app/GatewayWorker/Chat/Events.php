<?php
namespace App\GatewayWorker\Chat;

use App\GatewayWorker\BaseEvents;

/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events extends BaseEvents
{
}
