<?php

namespace App\Enums;

abstract class Code
{
    const Ok = 0;               // 成功
    const Error = 2;            // 错误
    const NoAuth = 10;          // 没有登录

    const Message = 100001;     // 只需提示字符串(如:未通过表单验证)

    const NotFound = 100002;    // 请求的 数据不存在|需要添加

    const QueryFailed = 100089; // 数据读取操作失败
    const WroteFailed = 100090; // 数据存储操作失败

    const NoMessage = 1000001;  // 不需要提示用户 1000000 以上
}