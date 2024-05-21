<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile text-primary'></i>
        <span class="text text-body">THC <span class="text-primary">Furniture</span></span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="ad_dashboard">
                <i class="fa-solid fa-house"></i>
                <span class="ms-1 text">Bảng điều kiển</span>
            </a>
        </li>
        <li>
            <a href="ad_listOrder">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="ms-1 text">Đơn hàng</span>
            </a>
        </li>
        <li>
            <a href="ad_products">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="ms-1 text">Sản phẩm</span>
            </a>
        </li>
        <li>
            <!-- Split dropend button -->
            <div class="btn-group dropend container-fluid">
                <a href="{{ url('ad_products') }}" class="btn btn-secondary rounded-end">
                    <i class="fa-solid fa-chart-pie"></i>
                    <span class="ms-1 text">Sản phẩm</span>
                </a>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropend</span>
                </button>
                <ul class="dropdown-menu">
                    <li>
						<a href="{{ url('ad_products') }}" class="dropdown-item">
							<i class="fa-solid fa-chart-pie"></i>
							<span class="ms-1 text">Quản lý sản phẩm</span>
						</a>
					</li>
                    <li>
						<a href="{{ url('#') }}" class="dropdown-item">
							<i class="fa-solid fa-chart-pie"></i>
							<span class="ms-1 text">Thêm sản phẩm</span>
						</a>
					</li>
                    <li>
						<a href="{{ url('#') }}" class="dropdown-item">
							<i class="fa-solid fa-chart-pie"></i>
							<span class="ms-1 text">Quản lý danh mục</span>
						</a>
					</li>
                    <li>
						<a href="{{ url('#') }}" class="dropdown-item">
							<i class="fa-solid fa-chart-pie"></i>
							<span class="ms-1 text">Thêm danh mục</span>
						</a>
					</li>
                </ul>
            </div>

        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-chart-pie"></i>
                <span class="ms-1 text">Báo cáo</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-comments"></i>
                <span class="ms-1 text">Bình luận</span>
            </a>
        </li>
        <li>
            <a href="ad_user">
                <i class="fa-solid fa-user-group"></i>
                <span class="ms-1 text">Người dùng</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="/">
                <i class="fa-solid fa-gear"></i>
                <span class="ms-1 text">Về THC Badminton</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="ms-1 text">Đăng xuất</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
