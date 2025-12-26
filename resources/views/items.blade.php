<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
</head>
<body>

<h2>Available Items</h2>

<p>
    <a href="/orders">🛒 My Orders</a>
</p>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>

            <!-- ✅ FIX HERE -->
            <td>{{ $item->category?->name ?? 'No Category' }}</td>

            <td>₹{{ $item->price }}</td>
            <td>
                <form method="POST" action="/buy/{{ $item->id }}">
                    @csrf
                    <button type="submit">Buy</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
