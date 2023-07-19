<?php

namespace Altinum\Hashidable\Tests\Models;

use Altinum\Hashidable\Hashidable;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use Altinum\Hashidable\HashidableConfigInterface;

class ModelConfig extends LaravelModel implements HashidableConfigInterface
{
    use Hashidable;

    protected $table = 'models';

    public function hashidableConfig()
    {
        return array_merge(config('hashidable'), ['length' => 64]);
    }
}
