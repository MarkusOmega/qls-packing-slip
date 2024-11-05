<?php

namespace App\Services;

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PdfGeneratorService
{
    protected $order;

    public function __construct(OrderController $orderController)
    {
        $this->order = $orderController->getOrder();
    }

    public function generatePdf() {
        $pdf = Pdf::loadView('pdf.order', ['order' => $this->order]);
        
        return $pdf;
    }

    public function savePdf($orderNumber, $pdf) {
        $fileName = 'invoice-'.$orderNumber.'.pdf';
        $filePath = 'pdfs/' . $fileName; 

        Storage::disk('public')->put($filePath, $pdf->output());
    }

    public function getPdfUrl($responseData) {
        try {
            if(!array_key_exists('data',$responseData) ) {
                throw new \Exception("Data array not found");
            }
    
            if(!array_key_exists('labels',$responseData['data']) ) {
                throw new \Exception("Labels array not found");
            }
    
            if(!array_key_exists('a6',$responseData['data']['labels']) ) {
                throw new \Exception("a6 label not found");
            }
            
            return $responseData['data']['labels']['a6'];
        } catch (\Exception $e) {
            Log::error(
                'Something went wrong while fetching the shippinglabel url', 
                [
                    'error' => $e, 
                ]
            );
        }
    }
}