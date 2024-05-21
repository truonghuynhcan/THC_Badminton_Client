<header>
    <nav class="navbar navbar-expand-lg py-2 fixed-top bg-body">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-body" href="/">THC <span class="text-primary">Badminton</span></a>
            <!-- Toggle Btn -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">THC <span
                            class="text-primary">Furniture</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-underline justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="/about">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-body dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class=" text-body dropdown-item" href="#">Action</a></li>
                                <li><a class=" text-body dropdown-item" href="#">Another action</a></li>
                                <li><a class=" text-body dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="{{url('agent')}}">Hệ thống</a>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn p-0">
                                    <a class="nav-link text-body px-0" href="{{url('news')}}">
                                        Tin tức
                                    </a>
                                </button>
                                <button type="button" class="px-1 btn dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php $loaitin_arr = Illuminate\Support\Facades\DB::table('news_cate')->select('id', 'name')->get();?>
                                    @foreach ($loaitin_arr as $lt)
                                        <li>
                                            <a class=" text-body dropdown-item"
                                                href="{{url('news_type', [$lt->id])}}">{{$lt->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Login / Sign up -->
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <input type="checkbox" id="switch-mode" hidden>
                        <label for="switch-mode" class="switch-mode"><i class="fa-regular fa-sun ms-1 me-2"></i><i
                                class="fa-regular fa-moon"></i></label>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const switchMode = document.getElementById("switch-mode");
                                const html = document.documentElement;

                                switchMode.addEventListener("click", function () {
                                    if (switchMode.checked) {
                                        html.setAttribute("data-bs-theme", "dark");
                                    } else {
                                        html.setAttribute("data-bs-theme", "light");

                                    }
                                });
                            });
                        </script>
                        <div class="dropdown">
                            <button class="border-0 bg-transparent" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa-regular fa-user"></i>
                            </button>
                            <?php if (!isset($_SESSION['user'])): ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/login">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="/signup">Đăng ký</a></li>
                                <li>
                                    <hr>
                                </li>
                                <li><a class="dropdown-item" href="/ad_dashboard">Admin</a></li>
                                <li><a class="dropdown-item" href="/user/info">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="/user/info_order">Quản lý đơn hàng</a>
                                </li>
                                <li class="border-top mt-2 py-1 opacity-75"><a class="dropdown-item"
                                        href="/user/logout">Đăng xuất</a></li>
                            </ul>
                            <?php elseif ($_SESSION['user']['Quyen'] === 1): ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/ad_dashboard/index">Admin</a></li>
                                <li><a class="dropdown-item" href="/user/info">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="/user/info_order">Quản lý đơn hàng</a></li>
                                <li class="border-top mt-2 py-1 opacity-75"><a class="dropdown-item"
                                        href="/user/logout">Đăng xuất</a></li>
                            </ul>
                            <?php else: ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/user/info">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="/user/login">Quản lý đơn hàng</a>
                                </li>
                                <li class="border-top mt-2 py-1 opacity-75"><a class="dropdown-item"
                                        href="/user/logout">Đăng xuất</a></li>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <a class="text-decoration-none text-black px-3 py-1 bg-primary rounded-4 text-white"
                            href="/cart">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>