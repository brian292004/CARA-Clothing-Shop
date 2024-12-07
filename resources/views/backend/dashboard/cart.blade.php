<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    @include('backend.component.head')
</head>
@include('backend.component.nav')
<body>

<div class="cart_wrapper">
    @include('backend.dashboard.showCart')
</div>
    @include('backend.component.script')
</body>
@include('backend.component.footer')
</html>