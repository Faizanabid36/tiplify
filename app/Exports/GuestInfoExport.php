<?php

namespace App\Exports;

use App\GuestInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuestInfoExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
//        return GuestInfo::all();
        return collect(GuestInfo::getExportRecord());
    }

    public function headings(): array
    {
        return [
            "Name", "Sir Name", "Email", "Contact No.","Seats Reserved","Reservation Date","Filled At"
        ];
    }
}
