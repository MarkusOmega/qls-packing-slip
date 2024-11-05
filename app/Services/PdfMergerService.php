<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;

class PdfMergerService
{
    protected $shipingLabelName;
    protected $orderPdfName;

    public function __construct()
    {
        $this->shipingLabelName = 'a6-label-';
        $this->orderPdfName = 'invoice-';
    }

    public function mergePdf($orderNumber) {
        $pdf = new FPDI();
        $pdf->AddPage();

        // get shipping label pdf
        $pdf->setSourceFile(Storage::disk('public')->path('/pdfs/'.$this->shipingLabelName.$orderNumber.'.pdf'));
        $tplId1 = $pdf->importPage(1);
        $pdf->useTemplate($tplId1, 25, 160, 90, 130); 

        // get order pdf
        $pdf->setSourceFile(Storage::disk('public')->path('/pdfs/'.$this->orderPdfName.$orderNumber.'.pdf'));
        $tplId2 = $pdf->importPage(1);
        $pdf->useTemplate($tplId2, 0, 0, 220, 260);

        $pdf->Output('I', 'single_page_merged_output.pdf');
    }
}