<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<style>


section.main {
    padding: 0 0;
    width: 100%;
    margin: 0px auto;
}
section.main a {
    text-decoration: none;
}
section.main section.recently .link a {
    text-decoration: none;
    color: black;
    font-size: 20px;
}
section.main section.recently .product-recently {
    padding-top: 2rem;
}
section.main section.recently .product-recently .row {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-column-gap: 30px;
    grid-row-gap: 30px;
}

section.main section.recently .product-recently .row .col img {
    width: 100%;
    border-radius: 10px;
}
section.main section.recently .product-recently .row .col img.thumbnail {
    border: 1px solid rgb(76, 78, 85);
    transition: 0.1s;
}
section.main section.recently .product-recently .row .col img.thumbnail:hover {
    box-shadow: 0px 0px 5px 0px grey;
}
section.main section.recently .product-recently .row .col .title p {
    font-size: 20px;
    font-weight: 600;
    padding: 0px;
    margin: 5px 0;
    color: black;
    font-family: "Encode Sans SC", sans-serif;
}
section.main section.recently .product-recently .row .col .price span {
    padding: 10px 0;
    color: #676767;
    font-size: 20px;
    font-weight: 600;
    color: rgba(207, 16, 16, 0.815);
    font-family: "Bebas Neue", cursive;
}
section.main section.recently .product-recently .row .col .dish span {
    padding: 10px 0;
    color: #676767;
}

section.main section.recently .product-recently .row .col .more {
    display: flex;
    color: #676767;
    padding: 5px 0;
    font-size: 18px;
}
section.main section.recently .product-recently .row .col .more .star {
    display: flex;
    align-items: center;
    justify-content: center;
}

section.main section.recently .product-recently .row .col .more .star img {
    width: 25px;
    height: 25px;

}
section.main section.recently .product-recently .row .col .more .time {
    display: flex;
    padding: 0 10px;

}
section.main section.recently .product-recently .row .col .more .time img {
    width: 24px;
    height: 24px;
}
section.main section.recently .title h1 {
    font-size: 35px;
    margin: 0px;
    padding: 30px;
    color: black;
    text-align:center;
}

section.main section.recently {
    padding-bottom: 3rem;
    padding-left: 3rem;
    padding-right: 3rem;
}
</style>
<section class="slider-main-area">
    <div class="main-slider an-si">
        <div class="bend niceties preview-2 hm-ver-1">
            <div id="ensign-nivoslider-2" class="slides">
                <img src="assets/images/banner_3.jpg" alt="" title="#slider-direction-3"  />
                <img src="assets/images/banner_1.jpg" alt="" title="#slider-direction-1"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-3" class="t-cn slider-direction Builder">
                <div class="slide-all">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title5">Phong cách mới</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">Luxury Fashion</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">giá cực ưu đãi!</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="index.php?controller=products&action=categories&category_id=1">Shop Now</a>
                    </div>
                </div>
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction Builder">
                <div class="slide-all slide2">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title5">Chỉ hôm nay</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">Luxury Fashion</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">Thời trang hot giảm giá!</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="index.php?controller=products&action=categories&category_id=3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section start -->
<div class="banner-area">
    <div class="container">
        <div class="section-padding1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="index.php?controller=products&action=categories&category_id=3">
                            <img alt="" src="assets/images/banner/2.jpg">
                            <div>
                                <h2>
                                    Luxury
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - POLOBEE, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box res-btm">
                        <a href="index.php?controller=products&action=categories&category_id=1">
                            <img alt="" src="assets/images/banner/3.jpg">
                            <div>
                                <h2>
                                    Luxury
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - POLOBEE, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-container banner-box res-btm">
                        <a href="index.php?controller=products&action=categories&category_id=2">
                            <img alt="" src="assets/images/banner/1.jpg">
                            <div>
                                <h2>
                                    Luxury
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - POLOBEE, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="index.php?controller=products&action=categories&category_id=2">
                            <img alt="" src="assets/images/banner/4.jpg">
                            <div>
                                <h2>
                                    Luxury
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - POLOBEE, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box">
                        <a href="index.php?controller=products&action=categories&category_id=4">
                            <img alt="" src="assets/images/banner/5.jpg">
                            <div>
                                <h2>
                                    Luxury
                                    <span>Store</span>
                                </h2>
                                <p>Duyên dáng sang trọng, chất lượng vượt thời gian - POLOBEE, nơi phong cách trở thành đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="featured-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>SẢN PHẨM TIÊU BIỂU</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-tab nav nav-tabs">
                    <ul>
                        <li class="active"><a data-toggle="tab" href="#all">Tất cả sản phẩm</a></li>
                        <?php
                            $categories = $this->modelGetCategories();
                            foreach ($categories as $category) {
                                echo '<li><a data-toggle="tab" href="#' . $category->name . '">' . $category->name . '</a></li>';
                            }
                            ?>
                    </ul>
               
                </div>
            </div>
        </div>
        <div class="row tab-content">
            <div class="tab-pane  fade in active" id="all">
                <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                    <?php
                        $feature_product = $this->modelFeatureProducts();
                        foreach ($feature_product as $item) {
                                echo '
                        <div class="col-xs-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="pro-type">
                                        <span>sale</span>
                                    </div>
                                    <a href="index.php?controller=products&action=detail&id=' . $item->id . '">
                                        <img class="thumbnail" src="assets/images/' . $item->thumbnail . '" alt="' . $item->title . '" />
                                        <img class="secondary-image" alt="' . $item->title . '" src="assets/images/' . $item->thumbnail . '">
                                    </a>
                                </div>
                                <div class="product-dsc">
                                    <h3><a href="#">' . $item->title . '</a></h3>
                                    <div class="star-price">
                                        <span class="price-left">' . number_format($item->price, 0, ',', '.') . ' VNĐ</span>
                                        <span class="star-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="actions-btn">

                                </div>
                            </div>

                        </div>';
                        }
                        ?>
                </div>
            </div>
            <!-- Hoodie product end -->
            <?php
                $categories = $this->modelGetCategories();
                foreach ($categories as $category) {
                    echo '<div class="tab-pane fade in" id="' . $category->name . '">';
                    echo '<div id="tab-carousel-' . $category->id . '" class="owl-carousel product-slider owl-theme">';

                    $category_products = $this->modelGetProducts($category->id);
                    foreach ($category_products as $product) { // Sửa biến $item thành $product
                        echo '<div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>sale</span>
                                </div>
                                <a href="index.php?controller=products&action=detail&id=' . $product->id . '">
                                    <img class="thumbnail" src="assets/images/' . $product->thumbnail . '" alt="' . $product->title . '" /> <!-- Sửa $item thành $product -->
                                    <img class="secondary-image" alt="' . $product->title . '" src="assets/images/' . $product->thumbnail . '"> <!-- Sửa $item thành $product -->
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">' . $product->title . '</a></h3> <!-- Sửa $item thành $product -->
                                <div class="star-price">
                                    <span class="price-left">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span> <!-- Sửa $item thành $product -->
                                    <span class="star-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="actions-btn">

                            </div>
                        </div>

                    </div>';
                    }

                    echo '</div></div>';
                }
                ?>

        </div>
    </div>
</section>

<div id="banner2">
    
    <div class="box-left" >
        <h2>
            <span>SPRING OF THE ¥ </span>
        </h2>
        <a href="thucdon_2.php?id_sanpham=2">
            <button>Mua ngay </button>
        </a>
    </div>
</div>

<section class="new-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>SẢN PHẨM HOT</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="new-products" class="owl-carousel product-slider owl-theme">
                <?php
                    $productList = $this->modelHotProducts();
                    foreach ($productList as $item) {
                        echo '
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>sale</span>
                                        </div>
                                        <a href="index.php?controller=products&action=detail&id=' . $item->product_id . '">
                                            <img class="thumbnail" src="assets/images/' . $item->thumbnail . '" alt="' . $item->title . '" />
                                            <img class="secondary-image" alt="' . $item->title . '" src="assets/images/' . $item->thumbnail . '">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">' . $item->title . '</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">' . number_format($item->price, 0, ',', '.') . ' VNĐ</span>
                                            <span class="star-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">

                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
            </div>
        </div>
    </div>
</section>

<div id="banner3">
    
    <div class="box-left" >
        <a href="thucdon_2.php?id_sanpham=3">
            <button>Mua ngay </button>
        </a>
    </div>
</div>

<section class="blog section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>from the blog</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="blog" class="owl-carousel product-slider owl-theme re-blog">
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="assets/images/new1.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Phụ kiện thời trang - Khám Phá Sự Lịch Lãm Tại POLOBEE</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                in
                                <a rel="category" href="blog.html">POLOBEE</a>
                                </span>
                                <span class="published">
                                <i class="fa fa-clock-o"></i>
                                Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content">
                                Tại POLOBEE, chúng tôi tin rằng chi tiết là chìa khóa để tạo nên phong cách độc đáo.
                                Blog của chúng tôi sẽ giới thiệu đến bạn những chiếc nơ, dây lưng, trang sức và các loại phụ kiện khác,
                                giúp bạn tạo nên điểm nhấn hoàn hảo cho bộ trang phục của mình.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="index.php?controller=blog&type=2">
                                <button>Xem thêm </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="assets/images/new2.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Áo Sơ Mi - Khám Phá Sự Tinh Tế Tại POLOBEE</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                in
                                <a rel="category" href="blog.html">POLOBEE</a>
                                </span>
                                <span class="published">
                                <i class="fa fa-clock-o"></i>
                                Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content">
                            POLOBEE tự hào về bộ sưu tập áo sơ mi nam phong phú từ các thương hiệu hàng đầu thế giới.
                                Chất liệu cao cấp, kiểu dáng đa dạng và màu sắc tinh tế, tất cả những yếu tố này được kết hợp tạo nên những chiếc áo sơ mi nam lý tưởng cho mọi dịp.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="index.php?controller=blog&type=1">
                                <button>Xem thêm </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="blog.html"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="assets/images/new3.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Giày - Khám Phá Sự Hoàn Hảo Tại POLOBEE</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                in
                                <a rel="category" href="blog.html">POLOBEE</a>
                                </span>
                                <span class="published">
                                <i class="fa fa-clock-o"></i>
                                Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content">
                                Tại POLOBEE, chúng tôi hiểu rằng đôi giày không chỉ là một phần của bộ trang phục mà còn là biểu tượng của phong cách và đẳng cấp.
                                Bạn sẽ được đắm chìm trong thế giới của sự sang trọng khi khám phá những mẫu giày độc đáo từ các thương hiệu danh tiếng.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="index.php?controller=blog&type=1">
                                <button>Xem thêm </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="blog-container-inner">
                        <div class="post-thumb">
                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="assets/images/new1.jpg"></a>
                        </div>
                        <div class="visual-inner">
                            <h2 class="blog-title">
                                <div class="name">Áo Vest - Sự Lịch Lãm Tại POLOBEE</div>
                            </h2>
                            <div class="blog-meta">
                                <span class="post-category">
                                in
                                <a rel="category" href="blog.html">POLOBEE</a>
                                </span>
                                <span class="published">
                                <i class="fa fa-clock-o"></i>
                                Oct 31, 2023
                                </span>
                                <span class="published2">0 comment</span>
                            </div>
                            <div class="blog-content">
                                Áo Vest không chỉ là một món đồ, mà còn là biểu tượng của sự lịch lãm và tinh tế.
                                Chúng tôi tự hào mang đến cho bạn những mẫu áo Vest đẳng cấp từ những nhãn hiệu danh tiếng, với các kiểu dáng và màu sắc đa dạng để bạn có thể tự do lựa chọn phản ánh phong cách riêng của mình.
                            </div>
                        </div>
                        <div class="box-left" >
                            <a href="index.php?controller=blog&type=3">
                                <button>Xem thêm </button><
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--------------------BANNER SALE--------------------------- -->
<div id="banner4">
    <!--banner4 banner sale off  -->
    <div class="box-left" >
        <a href="signup.php">
            <button>SIGN UP FOR FREE →</button><!--nút đăng ký -->
        </a>
    </div>
</div>
</section>
