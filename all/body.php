<?php
if (!defined('VIEW')) {
    exit("Bạn không thể truy trập vào đây");
}
?>

<!--Double navigation-->
<header>
    <nav class="navbar d-none d-md-flex">
        <a class="navbar-brand mx-auto" href="/">
            <div id="logo"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="250"></div>
        </a>
    </nav>
    <div class="top-head">
        <!-- Navbar top -->

        <nav class="navbar red darken-1 d-flex d-md-none p-2">
            <div class="text-center text-white w-100"><i class="fas fa-shipping-fast" aria-hidden="true"></i> Dịch Covid miễn phí giao hàng </div>
        </nav>
        <!-- Logo -->
    </div>

    <nav class="navbar fixed-bottom red darken-1">
        <div class="text-center text-white w-100" ><i class="fa fa-phone-square" aria-hidden="true"></i> Hotline: 0921 077 370</div>
    </nav>


    <!--Navbar-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark pink accent-1">
        <div class="container">
            <!-- Collapse button -->
            <div class="float-left">
                <button class="navbar-toggler rounded border border-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="navbar-toggler-icon"></i> MENU</span>
                </button>
            </div>


            <a class="navbar-brand mx-auto  d-none d-sm-block d-md-none" href="/">
                <div id="logo"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="100"></div>
            </a>

            <div class="navbar-brand">
                <ul class="navbar-nav  ml-auto nav-flex-icons">
                    <!-- <li class="nav-item">
                        <a class="nav-link">
                            <i class="fas fa-search"></i>
                        </a>
                    </li> -->

                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            
                            <?php if (getUser($conn)["status"] == true) { ?>
                                <a class="dropdown-item" href="/profile.php">Profile</a><?php } ?>
                            <?php if (getUser($conn)["status"] == true) { ?>
                                <br>
                                <a class="dropdown-item" href="/order.php">Lịch sử</a><?php } ?>
                            <?php if (getUser($conn)["status"] != true) { ?>
                                <a class="dropdown-item" href="/auth/login.php">Đăng nhập</a><?php } ?>
                            <?php if (getUser($conn)["status"] != true) { ?>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="/auth/reg.php">Đăng ký</a><?php } ?>
                            <?php if (getUser($conn)["status"] == true) { ?>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="/auth/logout.php">Đăng xuất</a><?php } ?>
                        </div>
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                <!-- Links -->
                <ul class="navbar-nav text-center" style="margin: auto;">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5" href="/">TRANG CHỦ</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle h5" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOA TƯƠI</a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/hoatuoi.php?loai=hong">HOA HỒNG</a>
                            <a class="dropdown-item" href="/hoatuoi.php?loai=huongduong">HOA HƯỚNG DƯƠNG</a>
                            <a class="dropdown-item" href="/hoatuoi.php?loai=sen">HOA SEN</a>
                            <a class="dropdown-item" href="/hoatuoi.php?loai=dongtien">HOA ĐỒNG TIỀN</a>
                            <a class="dropdown-item" href="/hoatuoi.php?loai=ly">HOA LY</a>
                            <a class="dropdown-item" href="/hoatuoi.php?loai=lan">HOA LAN</a>

                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5" href="#">CAO CẤP</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5" href="#">ĐẶT NHIỀU NHẤT</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5" href="#"> KHUYẾN MÃI</a>
                    </li>
                    



                </ul>
                <!-- Links -->
            </div>
            


            <!-- CTA -->

        </div>



    </nav>
    <!--/.Navbar-->


</header>




<main class="container">

    <div class="container-fluid">