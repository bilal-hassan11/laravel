<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TransactionsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function model(array $row){
        
        return new Transaction([
           'name_on_card' => $row[0],
           'card_no' => $row[1], 
           'exp_month' => $row[2], 
           'exp_year' => $row[3], 
           'cvv' => $row[4], 
        ]);
    }
    
}
