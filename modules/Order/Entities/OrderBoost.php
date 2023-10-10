<?php

namespace Modules\Order\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderBoost extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'order_boosting';

    protected $casts = [
        'boost_addition' => 'json',
    ];

}
