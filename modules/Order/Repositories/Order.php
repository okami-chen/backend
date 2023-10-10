<?php

namespace Modules\Order\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;
use Modules\Order\Entities\Order as Model;

class Order extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
