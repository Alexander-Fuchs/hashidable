<?php

namespace Altinum\Hashidable\Tests\Models;

use Altinum\Hashidable\Hashidable;
use Illuminate\Database\Eloquent\Model as LaravelModel;

class Model extends LaravelModel
{
    use Hashidable;
}
