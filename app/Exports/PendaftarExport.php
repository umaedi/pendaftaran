<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendaftarExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $pendaftar;
    public function __construct($pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }
    public function collection()
    {
        return $this->pendaftar;
    }

    public function headings(): array
    {
        return [
            'Nama Pendaftar',
            'Email',
            'No Tlp',
        ];
    }
}
