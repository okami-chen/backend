<?php
/**
 * @Author 陈德华
 * @Date 2023/10/10 10:53
 */

namespace Modules\Order\Consts;

class OrderDisputeConst
{

    const STATUS = [
        0 => '无争议',
        1 => '争议中',
        2 => '无损结案',
        3 => '有损结案',
        4 => '追回',
        5 => '退款'
    ];
}
