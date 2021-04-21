<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class BulkImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        function bulk(array $row){
           
            return new Bulk([
                'name'     => $row['name'],
                'email'    => $row['email'],
            ]);
        }
    }
}
