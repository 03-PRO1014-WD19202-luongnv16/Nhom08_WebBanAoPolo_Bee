<?php 
 include("Layout/header.php");
?>
<!-- pages-title-start -->
<section class="contact-img-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="con-text">
                                <h2 class="page-title">Shop</h2>
                                <p><a href="#">Home</a> | shop</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<main>
    <div class="container">
        <!-- END LAYOUT  -->
        <section class="main">
            <section class="oder-product" >
                <div class="title">
                    <section class="main-order">
                        <h1>Title</h1>
                        <div class="box">
                          <div class="left" >
                            <li >
                              <div class="main_image" >
                                <img src="" alt="">
                              </div>
                              <div class="main_image">
                                <img src="" alt="">
                              </div>
                              <div class="main_image">
                                <img src="" alt="">
                              </div>
                            </li>

                            <li>
                              <div class="main_image">
                                <img src="" alt="">
                              </div>
                              <div class="main_image">
                                <img src="" alt="">
                              </div>
                              <div class="main_image">
                                <img src="" alt="">
                              </div>
                            </li>

                        </div>
                        <div class="about">
                            <p style="padding-top:105px;margin-left:10px; width:300px"></p>
                            <p style="padding-top:20px;margin-left:10px; width:300px">Thương Hiệu: <span style="font-weight: 600; color:#FF6600"></span></p>
                            <div class="number"style="padding-top:10px;margin-left:10px;">
                                <span class="number-buy">Số lượng</span>
                                <input id="num" type="number" value="1" min="1">
                            </div>
                            
                            <p class="price"style="padding-top:70px;margin-left:10px;">Giá: <span id="price">100</span><span> VNĐ</span><span class="gia none"></span></p>
                            <script type="text/javascript">
                                
                            </script>
                        </div>
                        <div class="fb-comments" data-href="http://localhost/PROJECT/details.php" data-width="750" data-numposts="5"></div>

                    </section>
                </div>
            </section>
            <section class="restaurants">
                <div class="title">
                    <h1>Các sản phẩm khác tại <span class="green" style="color: #0099FF;">PoloBee Store</span></h1>
                </div>
                <div class="product-restaurants">
                    <div class="row">
                        
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>
<?php require_once('Layout/footer.php'); ?>