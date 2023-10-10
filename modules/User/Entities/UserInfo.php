<?php

namespace Modules\User\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'user_info';


}
