<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class GuestInfo extends Model
{
    use Notifiable;

    protected $guarded = [];
}
