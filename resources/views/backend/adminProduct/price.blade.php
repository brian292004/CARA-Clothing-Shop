<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>
                Price
                <a href="javascript:void(0);" onclick="sortProductsByPriceDesc()">↓</a>
                <a href="javascript:void(0);" onclick="sortProductsByPriceAsc()">&#8593;</a>
            </th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </table>
    <script>
        function sortProductsByPriceDesc() {
            var currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('order', 'desc');
            window.location.href = currentUrl.href;
        }
        function sortProductsByPriceAsc() {
            var currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('order', 'asc');
            window.location.href = currentUrl.href;
        }
    </script>
</body>
</html>