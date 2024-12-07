<div class="cart delete_cart_url" data-url="{{route('dashboard.deleteCart')}}" >
    <div class="container">
        <div class="row">
            <table class="table update_cart_url" data-url="{{ route('dashboard.updateCart') }}">
                <thead>
                  <tr>
                    <th scope="col">Seri sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Số lượng sản phẩm</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($carts as $id => $cart)
                        @php
                            $total += $cart['price'] * $cart['quantity'];
                        @endphp
                        <tr>
                            <th scope="row">{{ $id }}</th>
                            <td><img style="width: 200px; height: 200px; object-fit:contain" 
                                src="BE/products/images/{{$cart['image'] }}" alt="">
                            </td>
                            <td>{{ $cart['name'] }}</td>
                            <td>{{number_format($cart['price']) }}VNĐ</td>
                            <td>
                                <input type="number" value="{{  $cart['quantity'] }}" min="1">
                            </td>
                            <td>
                                {{number_format($cart['price'] * $cart['quantity'])}} VNĐ
                            </td>
                            <td>
                                <a href="" data-id="{{$id}}" class="btn btn-primary cart_update">Cập nhật </a>
                                <a href="" data-id="{{$id}}" class="btn btn-danger cart_delete">Xóa </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="col-md-12">
                <h3>Total: {{number_format($total) }}VNĐ </h3>
              </div>
            <label>Lưu ý: 
                <span class="text-danger">(*) Nhập số lượng sản phẩm và ấn cập nhật để lưu</span>
            </label>
        </div>
    </div>
</div>