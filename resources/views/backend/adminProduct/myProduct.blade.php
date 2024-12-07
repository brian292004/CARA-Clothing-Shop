@extends('adminLayout')
@section('body')
<div class="head-title">
    <div class="left">
        <h1>Dashboard</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Home</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active">{{ config('apps.user.list_project') }}</a>
            </li>    
        </ul>
    </div>
</div>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Products</h3>
            <a href="#" class="nav-link"></a>
            <form action="{{ route('admin.searchProduct') }}" method="GET">
                <div class="search">
                    <input type="text" name="keyword" placeholder="Search...">
                    <button type="submit" class="search"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <i class='bx bx-edit' ></i>
            <i class='bx bx-filter' ></i>
            <a href="{{route('admin.addProduct')}}" class="add-link">Add Products</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center">Product Name</th>
                    <th style="text-align: center">Image</th>
                    <th style="text-align: center">Description</th>
                    <th style="text-align: center">Price</th>
                    <th style="text-align: center" >Edit</th>
                </tr>
            </thead>
            <tbody>
                @if ($products && count($products) > 0)
                    @foreach ($products as $product)
                        <tr>
                            <td style="text-align: center">{{ $product->name }}</td>
                            <td class="image" style="text-align: center">
                                <div class="image-wrapper">
                                    <img src="BE/products/images/{{ $product->image }}">
                                </div>
                            </td>
                            <td style="text-align: center">{{ $product->description }}</td>
                            <td style="text-align: center">{{number_format($product->price)}}VNĐ</td>
                            <td class="text-center">
                                <a href="{{route('admin.editProduct',['id'=>$product->id]) }}" class="edit-link">Edit</a>
                                <a href="{{route('admin.deleteProduct',['id'=>$product->id]) }}" class="delete-link">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4">No products found.</td>
                    </tr>
                @endif    
            </tbody>
        </table>
        <div class="post-pagination" >
            <ul class="pagination"  >
                {{ $products->links('pagination::bootstrap-4') }}
            </ul>          
        </div >
    </div>
</div>
@endsection