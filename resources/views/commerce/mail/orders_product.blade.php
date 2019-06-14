@component('mail::message')
    # Order Received

    Thank you for your order.

    **Order ID:**    {{ $order->id }}

    **Order Email:** {{ $order->email }}

    **Order Name:**  {{ $order->name }}

    **Order Total:** ${{ round($order->subtotal) }}

    **Items Ordered**

    @foreach ($order->products as $product)
        Name: {{ $product->name }}
        Price: ${{ round($product->price)}}
        Quantity: {{ $product->pivot->quantity }}
    @endforeach

@endcomponent

