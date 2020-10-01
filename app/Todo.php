<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $dates = ['deadline'];

    protected $guarded = [];

    protected $appends = ['overdue'];

    public function getOverdueAttribute()
    {
        return $this->deadline->isPast();
    }
}
