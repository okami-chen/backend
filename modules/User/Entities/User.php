<?php

namespace Modules\User\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'user';

    protected $primaryKey = 'uid';

    protected function info(): HasOne
    {
        return $this->hasOne(UserInfo::class, 'uid', 'uid');
    }


}
