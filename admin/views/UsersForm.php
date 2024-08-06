
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Khách Hàng</title>
  <style>
    @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
    /* Bootstrap Icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
  </style>
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScrseipt -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="../script.js"></script>
</head>

<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class="text-success"><img src="../assets/images/logo.jpg" width="40" ><span class="text-info">POLOBEE</span>STORE</h3>
            </a>

            <!-- Divider -->
            <hr class="navbar-divider my-18 opacity-20">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=products">
                            <i class="bi bi-bag-heart"></i>Quản Lý Sản Phẩm
                        </a>
                    </li>
                    <!-- Divider -->
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=users">
                            <i class="bi bi-person-check"></i>Quản Lý Khách Hàng
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=orders">
                            <i class="bi bi-cash-stack"></i>Quản Lý Đơn Hàng
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=categories">
                            <i class="bi bi-bag-heart"></i>Quản Lý Danh Mục
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=collections">
                             <i class="bi bi-collection"></i>Quản Lý Thương Hiệu
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-18 opacity-20">

                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-house-heart-fill"></i></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=login&action=logout" onclick="return confirm('Are you sure you want to logout?')">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="../assets/images/logo.jpg" width="60"> POLOBEE Store</h1>
                        </div>

                    </div>

                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Sản Phẩm</span>

                                        <span class="h3 font-bold mb-0">
                                        <?php
                                           $product = $this->modelFeatureProducts();
                                           echo '<span>' . count($product) . '</span>';
                                        ?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Khách Hàng</span>
                                        <span class="h3 font-bold mb-0">
                                            <?php
                                              $user = $this->modelFeatureUser();
                                              echo '<span>' . count($user) . '</span>';
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Đơn Hàng</span>
                                        <span class="h3 font-bold mb-0">
                                        <?php
                                           $order = $this->modelFeatureOrderDetail();
                                           echo '<span>' . count($order) . '</span>';
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Danh Mục</span>
                                        <span class="h3 font-bold mb-0">
                                        <?php
                                           $category = $this->modelGetCategories();
                                           echo '<span>' . count($category) . '</span>';
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-minecart-loaded"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Thông Tin Khách Hàng</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <div class="panel-body">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo $action; ?>">
                                    <div class="form-group">
                                        <label for="name">Tên Khách Hàng:</label>
                                        <input type="text" id="id_user" name="id_user" value="<?php echo isset($record->id_user)?$record->id_user:""; ?>" hidden="true">
                                        <input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?php echo isset($record->fullname)?$record->fullname:""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên Đăng Nhập:</label>
                                        <input required="true" type="text" class="form-control" id="tendangnhap" name="tendangnhap" value="<?php echo isset($record->tendangnhap)?$record->tendangnhap:""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email:</label>
                                        <input required="true" type="text" class="form-control" id="email" name="email" value="<?php echo isset($record->email)?$record->email:""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Địa Chỉ:</label>
                                        <input required="true" type="text" class="form-control" id="diachi" name="diachi" value="<?php echo isset($record->diachi)?$record->diachi:""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Mật Khẩu:</label>
                                        <input required="true" type="text" class="form-control" id="matkhau" name="matkhau" value="<?php echo isset($record->matkhau)?$record->matkhau:""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Số Điện Thoại:</label>
                                        <input required="true" type="text" class="form-control" id="dienthoai" name="dienthoai" value="<?php echo isset($record->dienthoai)?$record->dienthoai:""; ?>">
                                    </div>
                                    <hr class="navbar-divider my-3 opacity-20">
                                    <button class="btn btn-success" onclick="addUser()">Lưu</button>
                                    <?php
                                    $previous = "javascript:history.go(-1)";
                                    if (isset($_SERVER['HTTP_REFERER'])) {
                                        $previous = $_SERVER['HTTP_REFERER'];
                                    }
                                    ?>
                                    <a href="<?= $previous ?>" class="btn btn-warning">Back</a>
                                </form>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
    <script type="text/javascript">
      function adUser(success) {
            if (success) {
                var option = confirm('Thêm user thành công. Bạn có muốn tiếp tục?');
                if (!option) {
                    return; 
                }
            } else {
                var option = confirm('Thêm user thất bại. Bạn có muốn thử lại?');
                if (!option) {
                    return; 
                }
            }
        }
    </script>

</body>
</html>
