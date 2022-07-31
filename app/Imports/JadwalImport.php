<?php
 
namespace App\Imports;
 
use App\Models\Jadwal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
 
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
            'tanggal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['tanggal']), 
            'jam_awal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['jam_awal']), 
            'jam_akhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['jam_akhir']),
           ]);
    }
}