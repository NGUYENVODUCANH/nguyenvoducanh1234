<div class="container">
            <a class="navbar-brand" href="../index.php">LibraShop</a>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="./search.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="./cart.php">Giỏ hàng</a>
                </li>
                <li class="nav-item text-nowrap">
                    <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                    <a class="nav-link" href="./login.php">Đăng nhập</a>
                </li>
            </ul>
        </div>