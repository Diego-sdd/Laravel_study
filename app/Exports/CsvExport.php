<?php

namespace App\Exports;

use App\ModelProposta;
use App\User;
use App\ModelExport;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ModelExport::randomForHome();
    }
}
