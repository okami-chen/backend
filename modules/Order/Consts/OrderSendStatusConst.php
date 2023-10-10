<?php
/**
 * @Author 陈德华
 * @Date 2023/10/10 10:53
 */

namespace Modules\Order\Consts;

class OrderSendStatusConst
{

    const STATUS = [
        0 => '未发货',
        1 => '待发货',
        2 => '发货中',
        3 => '发货完成',
        4 => '部分发货'
    ];
}
