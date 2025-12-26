<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
</head>
<body>

<h2>My Orders</h2>

@if($orders->isEmpty())
    <p>No orders found.</p>
@else
    <table border="1" cellpadding="10">
        <tr>
            <th>Order ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Order Date</th>
        </tr>

        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->item->name }}</td>
                <td>{{ $order->item->category?->name ?? 'N/A' }}</td>
                <td>₹{{ $order->item->price }}</td>
                <td>{{ $order->created_at->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </table>
@endif

<br>
<a href="/items">← Back to Items</a>

</body>
</html>
