<?php

namespace App\Exports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\FromCollection;

class DoctorExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Doctor::all();
    }
}
