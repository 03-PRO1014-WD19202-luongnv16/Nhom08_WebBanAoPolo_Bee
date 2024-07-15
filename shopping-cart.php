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
<!-- shopping-cart content section start -->
<div class="shopping-cart-area s-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="s-cart-all">
                            <div class="cart-form table-responsive">
                              
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th class="low8">STT</th>
                                        <th class="low1">Ảnh Sản Phẩm</th>
                                        <th class="low1">Tên Sản Phẩm</th>
                                        <th class="low7">Số Lượng</th>
                                        <th class="low7">Giá</th>
                                        <th class="low7">Tổng Tiền</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                    
                                    </tr>

                                </table>
                                
                            </div>
                            <div class="last-check1">
                                <div class="yith-wcwl-share yit">
                                    <p class="checkout-coupon an-cop">
                                        <input type="submit" value="Update Cart" data-item-id="">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="second-all-class">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="sub-total">
                                <table>
                                    <tbody>
                                        <!-- <tr class="cart-subtotal">
                                            <th>Subtotal:</th>
                                            <td>
                                                <span class="amount">$297.00</span>
                                            </td>
                                        </tr> -->
                                        <tr class="order-total">
                                            <th>Tổng Đơn Hàng:</th>
                                            <td>
                                                <strong>
                                                    <span class="amount"></span>
                                                    <span> VNĐ</span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="index.php">Continue Shopping</a>
                                </p>
                                <a class="wc-forward" href="checkout_product.php">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

		<!-- shopping-cart  content section end -->
    <script>

    </script>
    <hr class="opacity-20">
<?php require_once('Layout/footer.php'); ?>