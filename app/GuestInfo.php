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
         return GuestInfo::select('name', 'vorname', 'email', 'telefon','seats','date', 'created_at')
             ->whereResId(auth()->user()->restaurant->id)
             ->where('created_at', '>', now()->subMonth(1))
             ->orderBy('created_at', 'DESC')->get()->toArray();
//        return GuestInfo::select("id, name, vorname,email,telefon,created_at FROM guest_infos where res_id=" . auth()->user()->restaurant->id . " and (SELECT To_days(curdate()))-To_days(DATE(created_at))<=30 order by created_at desc");
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurants::class, 'res_id', 'id');
    }
}
