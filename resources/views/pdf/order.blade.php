<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Order #{{ $order['number'] }}</title>
        <style>
            body { font-family: Arial, sans-serif; font-size: 14px; }
            .container { width: 100%; max-width: 600px; margin: auto; }
            .header { text-align: center; margin-bottom: 20px; }
            .section-title { font-weight: bold; margin-top: 20px; }
            .section { margin-bottom: 10px; }
            .order-details { border-collapse: collapse; width: 100%; margin-top: 10px; }
            .order-details th, .order-details td { border: 1px solid #ddd; padding: 8px; }
            .order-details th { background-color: #f4f4f4; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>{{ trans('order.Order Details')}}</h1>
                <p>{{ trans('order.Order Number') }}: {{ $order['number'] }}</p>
            </div>

            <div class="section">
                <p class="section-title">{{ trans('order.Billing Address') }}</p>
                <p>
                    {{ $order['billing_address']['name'] }}<br>
                    {{ $order['billing_address']['companyname'] ?? '' }}<br>
                    {{ $order['billing_address']['street'] }} {{ $order['billing_address']['housenumber'] }}<br>
                    {{ $order['billing_address']['zipcode'] }} {{ $order['billing_address']['city'] }}<br>
                    {{ $order['billing_address']['country'] }}<br>
                    Email: {{ $order['billing_address']['email'] }}<br>
                    Phone: {{ $order['billing_address']['phone'] }}
                </p>
            </div>

            <div class="section">
                <p class="section-title">{{ trans('order.Delivery Address') }}</p>
                <p>
                    {{ $order['delivery_address']['name'] }}<br>
                    {{ $order['delivery_address']['companyname'] ?? '' }}<br>
                    {{ $order['delivery_address']['street'] }} {{ $order['delivery_address']['housenumber'] }}<br>
                    {{ $order['delivery_address']['zipcode'] }} {{ $order['delivery_address']['city'] }}<br>
                    {{ $order['delivery_address']['country'] }}
                </p>
            </div>

            <div class="section">
                <p class="section-title">{{ trans('order.Order Lines') }}</p>
                <table class="order-details">
                    <thead>
                        <tr>
                            <th>{{ trans('order.Quantity') }}</th>
                            <th>{{ trans('order.Product') }}</th>
                            <th>{{ trans('order.SKU') }}</th>
                            <th>{{ trans('order.EAN') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order['order_lines'] as $line)
                            <tr>
                                <td>{{ $line['amount_ordered'] }}</td>
                                <td>{{ $line['name'] }}</td>
                                <td>{{ $line['sku'] }}</td>
                                <td>{{ $line['ean'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>