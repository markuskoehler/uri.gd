<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    public function changelog() {
        return $this->hasMany(Changelog::class);
    }
}
