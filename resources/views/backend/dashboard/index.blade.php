
<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend/component/head')
</head>
<body>
    
    @include('backend/component/nav')

    <!---- home page section -------->
    @include('backend/component/banner')

    <!---- feature section -------->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="FE/products/img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="FE/products/img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="FE/products/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="FE/products/img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="FE/products/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="FE/products/img/features/f6.png" alt="">
            <h6>F24/7 Supper</h6>
        </div>

    </section>

    <!---- feature product section -------->
    

    <!---- arrivals section start  -->
    

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get Email updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

     <!---- footer section start -->
    @include('backend/component/footer')

     <!---- customer js file -->
    @include('backend/component/script')
</body>
</html>