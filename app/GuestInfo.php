<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class GuestInfo extends Model
{
    use Notifiable;

    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime:d-M-Y',
    ];

    public static function getExportRecord()
    {
        return GuestInfo::select('id', 'name', 'vorname', 'email', 'telefon', 'created_at')
            ->whereResId(auth()->user()->restaurant->id)
            ->orderBy('created_at', 'DESC')->get()->toArray();
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurants::class, 'res_id', 'id');
    }
}
