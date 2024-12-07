<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend/component/head')
  </head>
  <body>
    @include('backend/component/nav')
    
    <!---- home page section -------->
    <section id="page-header">
      <h2>Trang sản phẩm</h2>
      <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section id="prodetails" class="section-p1">
      <div class="single-product-image"  enctype="multipart/form-data" >
        <img src="BE/products/images/{{ $product['image'] }}" alt="" width="100%" id="mainImg" />

        <div class="small-img-group">
          <div class="small-img-col">
            <img
              src="BE/products/images/{{ $product['image'] }}"
              class="small-img"
              width="100%"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="BE/products/images/{{ $product['image'] }}"
              class="small-img"
              width="100%"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="BE/products/images/{{ $product['image'] }}"
              class="small-img"
              width="100%"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="BE/products/images/{{ $product['image'] }}"
              class="small-img"
              width="100%"
              alt=""
            />
          </div>
        </div>
      </div>
      
      <div class="single-product-details">
          <h6>Home / T-Shirt</h6>
          <h4>{{$product->name}}</h4>
          {{-- <p>Giá gốc: {{ number_format($product->price) }} VND</p>
          <p>Giảm giá: {{ $product->discount }}%</p>
          <p>Giá sau giảm: {{ number_format($product->discounted_price) }} VND</p> --}}
          <h2 style="color: #088178">{{number_format($product->price)}} VNĐ</h2>
        <select name="" id="">
          <option value="">Select Size</option>
          <option value="">XXL</option>
          <option value="">XL</option>
          <option value="">Medium</option>
          <option value="">Small</option>
        </select>
        <button data-url ="{{ route('addTocart',['id'=>$product->id]) }}" class=" add_to_cart">Thêm vào giỏ hàng</button>
        <h4>Thông tin sản phẩm</h4>
        
        <h3>
            {{$product->description}}
        </h3>
        
      </div>
    </section>

    <!---- sản phẩm liên quan -------->
    <section id="product1" class="section-p1">
      <h2>Các sản phẩm liên quan</h2>
      <!-- <p>Summer Collection New Mordern Design</p> -->
      <div class="pro-container">
        <div class="pro">
          <img src="BE/products/images/20240704074423.jpg" alt="" />
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
          <img src="BE/products/images/20240704073541.jpg" alt="" />
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
          <img src="BE/products/images/20240704074211.jpg" alt="" />
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
          <img src="BE/products/images/20240722011320.jpg" alt="" />
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
    </section>
    <!---- newletter section start -->
    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get Email updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>
    <!---- footer section start -->
    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="./img/logo.png" alt="" />
        <h4>Contact</h4>
        <p>
          <strong>Address:</strong> 562 Wellington Road, Street 32, San
          Francisco
        </p>
        <p><strong>Phone:</strong> +01 2222 365/(+91)0123456789</p>
        <p><strong>Hours:</strong> 10:00 - 18.00, Mon - Sat</p>

        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-pinterest"></i>
            <i class="fa fa-heart"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#">My Account</a>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>Form Store or Google Play</p>
        <div class="row">
          <img src="./img/pay/app.jpg" alt="" />
          <img src="./img/pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Getways</p>
        <img src="./img/pay/pay.png" alt="" />
      </div>
    </footer>

    <div class="copyright">
      <p>@ 2021, CodeSlaves Design - HTML CSS Ecommerce Template</p>
    </div>

    <!---- customer js file -->
    <script src="./script.js"></script>

    <!-- Xu ly su kien click vao anh nho thi no thay the anh lon -->
    <script>
      const mainImg = document.querySelector("#mainImg");
      const smallImgs = document.querySelectorAll(".small-img");

      smallImgs.forEach((smallImg) => {
        smallImg.addEventListener("click", () => {
          mainImg.src = smallImg.src;
        });
      });
    </script>
    @include('backend.component.script')
  </body>
</html>
