<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;



class SellExport implements FromView
{
    use Exportable;
    protected $request;

    function __construct($request)
    {
        $this->request = $request;
    }
    public function view(): View
    {
        $sell_details =$this->request;
        return view('Admin.components.Report.export_sell_report', compact('sell_details'));
    }
}

