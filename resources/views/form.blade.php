<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        @include('layout-parts.head')
</head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 header">
                @include('layout-parts.page-header')
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 body">
                <div class="card bg-light border-light p-5">
                    @include('components.form', ['shipingMethods' => $shipingMethods])
                </div>
            </div>
        </div>
    </div> 

    </body>
</html>
