<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="FE/assets/css/contact.css"/>
    @include('backend/component/head')
  </head>
  <body>
    @include('backend/component/nav')

    <!---- home page section -------->
    <section id="page-header" class="about-header">
      <h2>Liên hệ</h2>
      <p>Hãy liên hệ với chúng tôi - Rất vui nhận được phản hồi từ các bạn</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>Liên hệ</span>
        <h2>Địa chỉ</h2>
        <ul>
          <li>
            <i class="fa fa-map"></i>
            <p>124 Lê Lợi, Tp. Quảng Ngãi, tỉnh Quảng Ngãi</p>
          </li>
          <li>
            <i class="fa fa-envelope"></i>
            <p>124 Lê Lợi, Tp. Quảng Ngãi, tỉnh Quảng Ngãi</p>
          </li>
          <li>
            <i class="fa fa-phone-alt"></i>
            <p>124 Lê Lợi, Tp. Quảng Ngãi, tỉnh Quảng Ngãi</p>
          </li>
          <li>
            <i class="fa fa-clock"></i>
            <p>Từ thứ 2 đến Chủ nhật - 9h sáng đến 18h tối</p>
          </li>
        </ul>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.0962437382304!2d108.7714194726503!3d15.042791985497663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ab1162f58b19%3A0x31fbd9fd0f94a0f4!2zVsO1IER1eSBOaW5oLCBDaOG7oyBDaMO5YSwgTmdoxKlhIEjDoG5oLCBRdeG6o25nIE5nw6NpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1715958908908!5m2!1svi!2s"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
    <!---- newletter section start -->

    <!-- form contact -->
    <section id="form-contact">
      <form action="">
        <span>Gởi tin nhắn đến chúng tôi</span>
        <h2>Rất vui khi nhận phản hồi từ bạn</h2>
        <input type="text" placeholder="Tên của bạn" />
        <input type="text" placeholder="Email" />
        <input type="text" placeholder="Tiêu đề" />
        <textarea placeholder="Nội dung gởi" cols="30" rows="10"></textarea>
        <button>Gởi phản hồi</button>
      </form>

      <div class="people">
        <div>
          <img src="FE/assets/img/people/1.png" alt="" />
          <p>
            <span>COng Thanh</span> Dev in FullStack
            <br />
            Phone: 098832324342
            <br />
            Email: congthanh@gji.com
          </p>
        </div>

        <div>
          <img src="FE/assets/img/people/2.png" alt="" />
          <p>
            <span>COng Thanh</span> Dev in FullStack
            <br />
            Phone: 098832324342
            <br />
            Email: congthanh@gji.com
          </p>
        </div>

        <div>
          <img src="FE/assets/img/people/3.png" alt="" />
          <p>
            <span>COng Thanh</span> Dev in FullStack
            <br />
            Phone: 098832324342
            <br />
            Email: congthanh@gji.com
          </p>
        </div>
      </div>
    </section>

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
        <img class="logo" src="FE/assets/img/logo.png" alt="" />
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
          <img src="FE/assets/img/pay/app.jpg" alt="" />
          <img src="FE/assets/img/pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Getways</p>
        <img src="FE/assets/img/pay/pay.png" alt="" />
      </div>
    </footer>

    <div class="copyright">
      <p>@ 2021, CodeSlaves Design - HTML CSS Ecommerce Template</p>
    </div>

    <!---- customer js file -->
    <script src="FE/assets/js/script.js"></script>
  </body>
</html>
