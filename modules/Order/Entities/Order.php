<?php

namespace Modules\Order\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Game\Entities\Game;
use Modules\System\Entities\Admin;
use Modules\System\Entities\Site;

class Order extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'order';

    protected $primaryKey = 'order_id';

    protected $casts = [
        'pay.pay_msg' => 'json',
        'boost.boost_addition' => 'json',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'game_id');
    }

    public function en()
    {
        return $this->belongsTo(Admin::class, 'signer', 'id');
    }

    public function zh()
    {
        return $this->belongsTo(Admin::class, 'signsend', 'id');
    }

    public function info()
    {
        return $this->hasOne(OrderInfo::class, 'order_id', 'order_id');
    }

    public function items()
    {
        return $this->hasMany(OrderGoods::class, 'order_id', 'order_id');
    }

    public function pay()
    {
        return $this->HasOne(OrderPay::class, 'order_id', 'order_id');
    }

    public function boost()
    {
        return $this->HasOne(OrderBoost::class, 'order_id', 'order_id');
    }

    public function refund()
    {
        return $this->HasOne(OrderRefund::class, 'order_id', 'order_id');
    }

    public function user()
    {
        return $this->HasOne(OrderUser::class, 'order_id', 'order_id');
    }
}
