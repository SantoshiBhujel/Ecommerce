@component('mail::message')

<p>
Order has been placed by {{ $order->name }}. <br>
</p>

**Order ID:** {{ $order->id }} <br>
**Order Email:** {{ $order->email }} <br>
**Order Billing Name:** {{ $order->name }}<br>
**Payment:** {{ $order->payment_gateway }}
<br>
**Order Total:** {{ round($order->total,2) }}

**Items Ordered**
<br>
@foreach ($order->products as $item )
    Name: {{ $item->name }} <br>
    Quantity: {{ $item->pivot->quantity }} <br>
    Original Price (per item): {{ $item->pivot->original_price }} <br>
    Discount(per item): {{ $item->pivot->discount }} <br>
    Discounted Price (per item): {{ $item->pivot->discounted_price }} <br>
    Tax Amount (per item): {{ $item->pivot->tax_amount }} <br>
<br>
@endforeach

Thanks,<br>
{{ $order->name }}
@endcomponent
