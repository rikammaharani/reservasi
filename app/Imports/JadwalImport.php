<?php
 
namespace App\Imports;
 
use App\Models\Jadwal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
 
class JadwalImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jadwal([
            'tanggal' => $row['tanggal'], 
            'jam_awal' => $row['jam_awal'], 
            'jam_akhir' => $row['jam_akhir'],
           ]);
    }
}