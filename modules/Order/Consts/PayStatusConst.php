<?php
/**
 * @Author 陈德华
 * @Date 2023/10/10 10:53
 */

namespace Modules\Order\Consts;

class PayStatusConst
{

    const STATUS = [
        1 => '未支付',
        2 => '已支付',
        3 => '已退款',
        4 => '已部分退款',
        5 => '退款中',
        6 => 'pending',
    ];
}
