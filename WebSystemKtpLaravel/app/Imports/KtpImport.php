<?php

namespace App\Imports;

use App\ktp;
use Maatwebsite\Excel\Concerns\ToModel;

class KtpImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $tgl = str_replace("-", "", $row[4]);; 
        
        $umur = 0;
        $date1=date_create($row[4]);
        $date2=date_create(date("Y-m-d"));
        $diff=date_diff($date1,$date2);
        $umur = $diff->format("%y");

        return new ktp([
            'NIK' => '3310107'.$tgl.'0001',
            'Nama' => $row[2],
            'TempatLahir' => $row[3],
            'TanggalLahir' => $row[4],
            'Jenis_Kelamin' => $row[5],
            'Gol_Darah' => $row[6],
            'Alamat' => $row[7],
            'RT_RW' => $row[8],
            'Dk' => $row[9],
            'Ds' => $row[10],
            'Kec' => $row[11],
            'Agama' => $row[12],
            'Status' => $row[13],
            'Kerja' => $row[14],
            'Kewarganegaraan' => $row[15],
            'foto' => '-',
        ]);
    }
}
