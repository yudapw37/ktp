<?php

namespace App\Exports;

use App\ktp;
use Maatwebsite\Excel\Concerns\FromCollection;

class KtpExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ktp::all();
    }
}
