<?php

namespace App\Services;

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ShippingLabelService
{
    protected $api;
    protected $client;
    protected $order;

    public function __construct(OrderController $orderController)
    {
        $this->api = new QlsApiService();

        $this->client = new Client();

        $this->order = $orderController->getOrder();
    }


    public function getShipingProducts() {
        try{
            $response = $this->client->request(
                'GET', 
                $this->api->getApiBaseUrl().'/company/'.$this->api->getCompanyId().'/product', 
                [
                    'auth' => [$this->api->getApiUser(), 
                    $this->api->getApiPass()
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            
            $i = 0;
            foreach($data['data'] as $shippingProduct) {
                if ($shippingProduct['type'] != 'delivery' || !in_array('NL',  array_column($shippingProduct['pricing'], 'country'))) {
                    unset($data['data'][$i]);
                }
                $i++;
            };
         
            return $data;

        } catch (\Exception $e) {
            Log::error(
                'Shipping products could not be fetched', 
                [
                    'error' => $e, 
                ]
            );
        }
    }

    public function getShipinglabels($productId, $productCombinationId) {
        try {
            $response = $this->client->request(
                'POST',
                $this->api->getApiBaseUrl().'/company/'.$this->api->getCompanyId().'/shipment/create', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'auth' => [
                    $this->api->getApiUser(), 
                    $this->api->getApiPass()
                ],
                'json' => [
                    'brand_id' => $this->api->getBrandId(),
                    'reference' => $this->order['number'],
                    'weight' => 1000,
                    'product_id' => $productId,
                    'product_combination_id' => $productCombinationId,
                    'cod_amount' => 0,
                    'piece_total' => 1,
                    'receiver_contact' => [
                        'companyname' => $this->order['delivery_address']['companyname'],
                        'name' => $this->order['delivery_address']['name'],
                        'street' => $this->order['delivery_address']['street'],
                        'housenumber' => $this->order['delivery_address']['housenumber'],
                        'postalcode' => $this->order['delivery_address']['zipcode'],
                        'locality' => $this->order['delivery_address']['city'],
                        'country' => $this->order['delivery_address']['country'],
                        'email' => $this->order['billing_address']['email'],
                    ]
                ],
                'allow_redirects' => true,
            ]);
    
            $responseData = json_decode($response->getBody()->getContents(), true);

            return $responseData;
            
        } catch (\Exception $e) {
            Log::error(
                'Shipping products could not be fetched', 
                [
                    'error' => $e, 
                ]
            );
        }
    }

    public function storeShippingLabelPdf($pdfUrl, $orderNumber) {
        $response = Http::get($pdfUrl);

        if ($response->successful()) {
            $fileName = 'a6-label-'.$orderNumber.'.pdf';
            $filePath = 'pdfs/' . $fileName; 

            // Store the file in the public directory
            Storage::disk('public')->put($filePath, $response->body());

            return response()->json([
                'message' => 'PDF downloaded and saved successfully!',
                'file_path' => asset('storage/' . $filePath),
            ]);
        }

        // If the download fails, return an error message
        return response()->json([
            'message' => 'Failed to download PDF.',
        ], 500);
    }
}