<?php
if (!defined('VIEW')) {
    exit("Bạn không thể truy trập vào đây");
}
?>

<!--Double navigation-->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="/admin/dashboard.php"><img src="../images/logo.png" class="img-fluid flex-center"></a>
                </div>
            </li>
            <!--/. Logo -->


            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="/admin/dashboard.php"><i class="fas fa-tachometer-alt fa-fw me-3"></i> Main dashboard</a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="#"><i class="fas fa-chart-area fa-fw me-3"></i> Webiste traffic</a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-newspaper fa-fw me-3"></i>Product<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="/admin/product.php" class="waves-effect">Danh sách sản phẩm</a>
                                </li>
                                <li><a href="/admin/add.php" class="waves-effect">Thêm sản phẩm</a>
                                </li>
                                <li><a href="/admin/update.php" class="waves-effect">Sửa sản phẩm</a>
                                </li>
                                <li><a href="/admin/delete.php" class="waves-effect">Xoá sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-box fa-fw me-3"></i>Đơn hàng<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="/admin/orders.php"><i class="fas fa-chart-bar fa-fw me-3"></i> Orders</a>
                                </li>
                                <li><a href="/admin/shipping.php"><i class="fas fa-shipping-fast fa-fw me-3"></i> Vận chuyển</a>
                                </li>
                                <li><a href="/admin/order_done.php"><i class="fas fa-clipboard-check fa-fw me-3"></i> Thành công</a>
                                </li>
                                <li><a href="/admin/order_failse.php"><i class="fas fa-times fa-fw me-3"></i> Huỷ hàng</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>


                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chart-line  fa-fw me-3"></i>Analytics<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="/admin/product_top.php"><i class="far fa-heart fa-fw me-3"></i> Sản phẩm bán chạy</a>
                                </li>
                                <li><a href="/admin/users_vip.php"><i class="far fa-heart fa-fw me-3"></i> Khách hàng thân thiết</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>


                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="/admin/users.php"><i class="fas fa-users fa-fw me-3"></i> Users</a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="#"><i class="fas fa-money-bill fa-fw me-3"></i> Sales</a>
                    </li>

                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="#"><i class="fas fa-chart-pie fa-fw me-3"></i> SEO</a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="#"><i class="fas fa-building fa-fw me-3"></i> Partners</a>
                    </li>



                </ul>
            </li>


        </ul>
        </li>
        <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <div class="container-fluid">
            <!-- Toggle button -->
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p> Dashboard</p>
            </div>
            <!-- Search form -->
            <form class=" col-auto mr-auto sm-auto d-none d-md-flex input-group w-auto my-auto ">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <ul class="navbar-nav ms-auto d-flex flex-row">


                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>



                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

                        <hr class="dropdown-divider">
                        <a class="dropdown-item waves-effect waves-light" href="/auth/logout.php">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>

</header>


<main>

    <div class="container-fluid">