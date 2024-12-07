@include('backend/component/head')
@include('backend/component/nav')
</script>
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Mordern Design</p>
    <div class="toolbar-sorter sorter"><!-- <label class="sorter-label" for="sorter">--><!--</label>-->
        <select id="sortSelect" class="sorter-options" onchange="handleSort(this.value)">
            <option value="">Sắp xếp</option>
            <option value="price_asc" {{ $sortField == 'price' && $sortOrder == 'asc' ? 'selected' : '' }}>Giá tăng dần</option>
            <option value="price_desc" {{ $sortField == 'price' && $sortOrder == 'desc' ? 'selected' : '' }}>Giá giảm dần</option>
            <option value="special_price" {{ $sortField == 'discount' ? 'selected' : '' }}>Giảm giá nhiều nhất</option>
            <option value="created_at_desc" {{ $sortField == 'created_at' && $sortOrder == 'desc' ? 'selected' : '' }}>Sản phẩm mới nhất</option>
        </select>
    </div> 
    <div class="pro-container">
        @foreach ($products as $product)
        <div class="pro">
            <img src="BE/products/images/{{ $product['image'] }}">    
            <div class="des">
                <h5>{{ $product->name }}</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>{{number_format($product['price']) }}VNĐ</h4>
            </div>
            <a href="{{route('dashboard.productsDetail',['id'=>$product->id]) }}" class="fa fa-shopping-cart"></a>
            {{-- <a href="#"
                data-url ="{{ route('addTocart',['id'=>$product->id]) }}"
                class="fa fa-shopping-cart add_to_cart"
                >
            </a> --}}
        </div>
        @endforeach
    </div>
</section>

<br>

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span> 70% off</span> - All t-Shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>

 <!---- feature product section -------->
 <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Mordern Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="FE/products/img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="FE/products/img/products/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>
    </div>
@include('backend/component/script')
</section> 
