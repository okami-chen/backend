<?php
/**
 * @Author 陈德华
 * @Date 2023/10/10 10:53
 */

namespace Modules\Order\Consts;

class OrderStatusConst
{
    const STATUS = [
        1 => '待验证',
        2 => '验证通过',
        3 => '验证不通过',
        4 => '验证滞留',
        5 => '进一步验证',
        6 => '上线单',
        7 => '滞留单',
        8 => '争议中',
        9 => '完成单',
        10 => '作废单',
        11 => '无损结案',
        12 => '退款结案'
    ];
}
