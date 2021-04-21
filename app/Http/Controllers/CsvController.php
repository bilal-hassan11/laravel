<?php

namespace App\Http\Controllers;

use App\Models\Csvdata; 
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function import(){

        return view('import');
    }

    public function csv_data(){

        $finalData = Csvdata::all ();
        
        return view ('importcsv')->withData ($finalData);
        
    }
    public function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;
    
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
    
        return $data;
    }
    // // public function importcsv(){


    // //     if (($handle = fopen ( public_path () . '/bulkData.xlsx', 'r' )) !== FALSE) {
    // //         while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
    
    // //             $csv_data = new Csvdata ();
    // //                 $csv_data->id = $data [0];
    // //                 $csv_data->firstname = $data [1];
    // //                 $csv_data->lastname = $data [2];
    // //                 $csv_data->email = $data [3];
    // //                 $csv_data->gender = $data [4];
    // //             $csv_data->save ();
    
    // //         }
    // //         fclose ( $handle );
    // //     }

    // //     return redirect('route('')')
    // // }

    public function importcsv(Request $request){

        $filename = $request->file();
        dd($filename);

        if (!file_exists($filename) || !is_readable($filename))
            return false;
    
            $header = null;
            $data = array();
            if (($handle = fopen($filename, 'r')) !== false)
            {
                while (($row = fgetcsv($handle, 1000,',')) !== false)
                {
                    if (!$header)
                        $header = $row;
                    else
                        $data[] = array_combine($header, $row);
                }
                fclose($handle);
        }
    
        return $data;
    }

}
