<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
