<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $guarded = [];

    protected $with = ['filled_guest_forms'];

    public function filled_guest_forms()
    {
        return $this->hasMany(GuestInfo::class, 'res_id', 'id');
    }

}
