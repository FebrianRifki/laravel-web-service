<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['activity_name'];
    
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
