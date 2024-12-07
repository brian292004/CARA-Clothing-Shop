<nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="nav-link"></a>
    <form action="" method="GET">
        <div class="form-input">
            <input type="text" name="keyword" placeholder="Search...">
            <button type="submit" class="search"><i class='bx bx-search' ></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
    </a>
    <a href="#" class="profile">
        <img src="BE/admin/img/2.jpg">
    </a>
    <span class="material-symbols-outlined">
        <a href="{{route('auth.logout')}}">logout</a>
    </span>
</nav>