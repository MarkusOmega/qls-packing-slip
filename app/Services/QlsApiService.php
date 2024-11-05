<?php

namespace App\Services;

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;


class QlsApiService
{
    protected $apiUser;
    protected $apiPass;
    protected $apiBaseUrl;
    protected $client;
    protected $companyId;
    protected $brandId;

    public function __construct()
    {
        // Load key and URL from the .env file, or set them here directly
        $this->apiUser = config('services.qls_api.user'); // Ensure this is set in config/services.php
        $this->apiPass = config('services.qls_api.pass'); // Ensure this is set in config/services.php
        $this->apiBaseUrl = config('services.qls_api.base_url');

        $this->companyId = config('services.qls_api.companyId');
        $this->brandId = config('services.qls_api.brandId');

        $this->validateConfig();
    }

    protected function validateConfig()
    {
        $validator = Validator::make(
            [
                'api_user' => $this->apiUser,
                'api_pass' => $this->apiPass,
                'api_base_url' => $this->apiBaseUrl,
                'company_id' => $this->companyId,
            ],
            [
                'api_user' => 'required|email', // Assuming the key is at least 32 characters
                'api_pass' => 'required|string',
                'api_base_url' => 'required|url',
                'company_id' => 'required|string'
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function getApiUser() {
        return $this->apiUser;
    }

    public function getApiPass() {
        return $this->apiPass;
    }

    public function getApiBaseUrl() {
        return $this->apiBaseUrl;
    }

    public function getCompanyId() {
        return $this->companyId;
    }

    public function getBrandId() {
        return $this->brandId;
    }
}