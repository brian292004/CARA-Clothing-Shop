<section id="header">
  <a href="#"><img src="FE/products/img/logo.png" class="logo" alt=""></a>
  <div>
      <ul id="navbar">
          <li><a class="active" href="/index">Home</a></li>
          <li><a href="/shop">Shop</a>
            <div class="dropdown-content">
                <a href="#">Category 1</a>
                <a href="#">Category 2</a>
                <a href="#">Category 3</a>
            </div>
          </li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">About</a></li>
          <li><a href="/Contact">Contact</a></li>
          <li id="lg-bag"><a href="{{route('dashboard.showCart')}}"><i class="fas fa-shopping-bag"></i></a></li>
          <li><a href="{{route('auth.logout')}}"><span class="material-symbols-outlined">
            waving_hand
            </span></a></li>
      </ul>
  </div>
  <div id="mobile">
      <a href=""><i class="fas fa-shopping-bag"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
  </div>
</section>
<script>
    const links = document.querySelectorAll('navbar a');

    links.forEach(link => {
        link.addEventListener('click', function() {
            // Remove 'active' class from all links
            links.forEach(item => {
                item.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            this.classList.add('active');
        });
    });
</script>