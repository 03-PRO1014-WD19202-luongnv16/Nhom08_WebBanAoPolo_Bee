<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Sản Phẩm</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- summernote -->
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
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
                <h3 class="text-success"><img src="../../images/logo.png" width="40" >
                <span class="text-info">PoloBee</span>Store</h3> 
            </a>
            
            <!-- Divider -->
            <hr class="navbar-divider my-18 opacity-20">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="../product/index.php">
                            <i class="bi bi-bag-heart"></i>Quản Lý Sản Phẩm
                        </a>
                    </li>
                    <!-- Divider -->
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="../user/index.php">
                            <i class="bi bi-person-check"></i>Quản Lý Khách Hàng
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="../order.php">
                            <i class="bi bi-cash-stack"></i>Quản Lý Đơn Hàng
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="../category/index.php">
                            <i class="bi bi-bag-heart"></i>Quản Lý Danh Mục
                        </a>
                    </li>
                    <hr class="navbar-divider my-3 opacity-20">
                    <li class="nav-item">
                        <a class="nav-link" href="../collection/index.php">
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
                        <a class="nav-link" href="../../index.php">
                            <i class="bi bi-house-heart-fill"></i></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php" onclick="return confirm('Are you sure you want to logout?')">
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
                                <img src="../../images/logo.png" width="60"> PoloBee Store</h1>
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
                        <h5 class="mb-0">Thêm Sản Phẩm</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                        <div class="panel-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Tên Sản Phẩm:</label>
                                    <input type="text" id="id" name="id" value="" hidden="true">
                                    <input required="true" type="text" class="form-control" id="title" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Chọn Danh Mục</label>
                                    <select class="form-control" id="id_category" name="id_category">

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Chọn Thương Hiệu/Bộ Sưu Tập</label>
                                    <select class="form-control" id="id_sanpham" name="id_sanpham">
       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Giá Sản Phẩm:</label>
                                    <input required="true" type="text" class="form-control" id="price" name="price" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Số Lượng Sản Phẩm:</label>
                                    <input required="true" type="number" class="form-control" id="number" name="number" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail" name="thumbnail" value="">
                                    <img src="<?= $thumbnail ?>" style="max-width: 200px" id="img_thumbnail">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail_1" name="thumbnail_1" value="">
                                    <img src="<?= $thumbnail_1 ?>" style="max-width: 200px" id="img_thumbnail_1">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail_2" name="thumbnail_2" value="">
                                    <img src="<?= $thumbnail_2 ?>" style="max-width: 200px" id="img_thumbnail_2">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail_3" name="thumbnail_3"value="">
                                    <img src="<?= $thumbnail_3 ?>" style="max-width: 200px" id="img_thumbnail_3">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail_4" name="thumbnail_4"value="">
                                    <img src="<?= $thumbnail_4 ?>" style="max-width: 200px" id="img_thumbnail_4">
                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" id="thumbnail_5" name="thumbnail_5" value="">
                                    <img src="<?= $thumbnail_5 ?>" style="max-width: 200px" id="img_thumbnail_5">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Nội dung</label>
                                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                                </div>
                                <hr class="navbar-divider my-3 opacity-20">
                                <button class="btn btn-success" >Lưu</button>
                                <a href="" class="btn btn-warning">Back</a>
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
    </script>
  
</body>
</html>
