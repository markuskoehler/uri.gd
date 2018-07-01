<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\BinaryUuid\HasBinaryUuid;

class Url extends Model
{
    use HasBinaryUuid;

    protected $hidden = ['user_id'];
}
