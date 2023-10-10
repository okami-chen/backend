<?php

namespace Modules\Order\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPay extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'order_pay';

    protected $primaryKey = 'pay_id';

    protected $casts = [
        'pay_msg' => 'json',
    ];

}