<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackingslipRequest;
use App\Services\PdfGeneratorService;
use App\Services\PdfMergerService;
use App\Services\QlsApiService;
use App\Services\ShippingLabelService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\OrderController;

class PackingSlipController extends Controller
{
    protected $api;
    protected $pdfGenerator;
    protected $pdfMerger;
    protected $shippingLabelService;
    protected $order;

    public function __construct(OrderController $orderController)
    {
        
        $this->api = new QlsApiService();
        $this->pdfGenerator = new PdfGeneratorService($orderController);
        $this->pdfMerger = new PdfMergerService();
        $this->shippingLabelService = new ShippingLabelService($orderController);

        $this->order = $orderController->getOrder();
    }

    public function index() {
        $shipingMethods = $this->shippingLabelService->getShipingProducts(); 
   
        return view('form', ['shipingMethods' => $shipingMethods]);
    }

    public function submitForm(PackingslipRequest $request) {
        try{       
            $orderNumber = trim($this->order['number'], '#');
            
            // generate pdf from order      
            $orderPdf =  $this->pdfGenerator->generatePdf();
                            
            $orderPdf =  $this->pdfGenerator->savePdf($orderNumber,$orderPdf);
            
            // get packing slips from api
            $packingslip = $this->shippingLabelService->getShipinglabels($request['delivery-method'], $request['shipping-option']);

            
            // get the url to the packingslip pdf
            $pdfUrl = $this->pdfGenerator->getPdfUrl($packingslip);

            // strore the packingslip pdf in the local storage
            $this->shippingLabelService->storeShippingLabelPdf($pdfUrl, $orderNumber);

            $this->pdfMerger->mergePdf($orderNumber);

        } catch (\Exception $e) {
            Log::error(
                'Shipping products could not be fetched', 
                [
                    'error' => $e, 
                ]
            );
        }


    }

}
