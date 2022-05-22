<?php

namespace App\Exports;

use App\Models\Email;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class EmailsExport implements FromCollection,WithMapping, WithHeadings,ShouldAutoSize

{
    use Exportable;
    public function map($email): array{
        return[
            $email->id,
            $email->email,
            $email->created_at
        ];
    }
    public function headings():array{
        return [
            '#',
            'Email',
            'Created_at'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Email::All();
    }
}
