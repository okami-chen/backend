<?php

namespace Modules\Game\Entities;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $connection = 'bee';

    protected $table = 'game';

    protected $primaryKey = 'game_id';
}
