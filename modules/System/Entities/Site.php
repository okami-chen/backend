<?php

namespace Modules\System\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasDateTimeFormatter;

    protected $connection = 'bee';

    protected $table = 'system_site';

}
