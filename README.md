## QLS Packing slip generator

This laravel tool can be used to create a complete packing slip for your orders. 

1. Get shipping methods and options from api an filter them according to type and country
2. Generete a order pdf and store it locally
3. Get the packingslip from the api using the chosen shipping method and options (for now only the first one will be used).
4. Store packingslip locally.
5. Get order pdf and packing slip and combine them into one pdf using fpdi.
6. Show generated pdf in browser.

### Used packages
- barryvdh/laravel-dompdf
- guzzlehttp/guzzle
- setasign/fpdf
- setasign/fpdi