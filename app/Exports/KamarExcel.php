<?php

namespace App\Exports;

use App\Models\Kamar;
use Maatwebsite\Excel\Concerns\FromCollection;

class KamarExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kamar::all();
    }
}
