<?php 
 include("Layout/header.php");
?>
<!-- pages-title-start -->
<section class="contact-img-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="con-text">
                                
                                <h2 class="page-title">THÔNG TIN ĐẶT HÀNG</h2>
                                <p><a href="#">Home</a> | shop</p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<form action="" method="POST">
<div class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        <form action="#">
                                            <div class="checkbox-form">
                                                <div class="col-md-12">
                                                    <h3 class="checkbox9">THÔNG TIN LIÊN HỆ</h3>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Họ và tên
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" id="usr" name="fullname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Email Address 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="email" required="" id="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Phone 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="tel" required="" id="phone_number" name="phone_number">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                        Country 
                                                        <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>Bangladesh</option>
                                                            <option>Albania</option>
                                                            <option>Åland Islands</option>
                                                            <option>Afghanistan</option>
                                                            <option>Belgium</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <label class="l-contact">
                                                        Address  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" id="address" name="address"  placeholder="Địa chỉ của bạn">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="di-na bs tana">
                                                        <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="l-contact">
                                                        Town / City  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                            District 
                                                            <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>mymensingh</option>
                                                            <option>dhaka</option>
                                                            <option>khulna</option>
                                                            <option>kumillah</option>
                                                            <option>chadpur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Postcode / ZIP
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- <div id="checkout_coupon2" class="coupon-checkout-content2">
                                            <div class="checkbox-form">
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        First Name 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Last Name 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Company Name
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Email Address 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="email" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Phone 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="tel" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                        Country 
                                                        <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>Bangladesh</option>
                                                            <option>Albania</option>
                                                            <option>Åland Islands</option>
                                                            <option>Afghanistan</option>
                                                            <option>Belgium</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="l-contact">
                                                        Address  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" name="name"  placeholder="Street address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="di-na bs tana">
                                                        <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="l-contact">
                                                        Town / City  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                            District 
                                                            <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>mymensingh</option>
                                                            <option>dhaka</option>
                                                            <option>khulna</option>
                                                            <option>kumillah</option>
                                                            <option>chadpur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Postcode / ZIP
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                        <div class="col-md-12">
                                            <h3 class="checkbox9">BẠN MUỐN GỬI ĐẾN ĐỊA CHỈ KHÁC?</h3>
                                            <div id="showcoupon2">
                                                <input class="input-checkbox" type="checkbox">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="di-na bs">
                                                <label class="l-contact">
                                                    Ghi chú đơn hàng
                                                </label>
                                                <textarea class="input-text " placeholder="Để lại lời nhắn ở đây..." name="note" id="note"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p class="checkout-coupon">
                                                <a href="dashboard.php"><input type="submit" value="CONTINUE"></a>
                                            </p>
                                        </div>
                                            
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="top-check-text">
                                                <div class="check-down">
                                                    <h3 class="checkbox9">INFORMATION</h3>
                                                    <span><a class="ro-edit-customer-info" href="#">Edit</a></span>
                                                </div>
                                                <div class="ro-content2">
                                                    <div class="ro-info2">
                                                        <p>
                                                            <span>Email Address: </span>
                                                            tasnimakter903@yahoo.com
                                                        </p>
                                                    </div>
                                                    <div class="ro-info2">
                                                        <p>
                                                            <span>Country: </span>
                                                            BD
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="#" class="all-payment">
                                                <div class="all-paymet-border">
                                                    <div class="payment-method">
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                                            <label for="payment_method_1"> Direct Bank Transfer </label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                            <label for="payment_method_2"> Cheque Payment  </label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                            <label for="payment_method_3">PayPal <img alt="" src="img/icon-img/44.png"><a href="#">What is PayPal?</a></label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row place-order">
                                                        <input class="button alt" type="submit" value="Place order" >
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="message">
                                    <div class="last-check">
                                        <h3 class="checkbox9">complete</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="ro-checkout-summary">
                                            <div class="ro-title">
                                                <h3 class="checkbox9">ORDER SUMMARY</h3>
                                            </div>
                               
                                            <div class="ro-footer">
                                                <div>
                                                    <p>
                                                        Subtotal
                                                        <span>
                                                            <span class="amount">
                                                        </span>
                                                    </p>
                                                    <div class="ro-divide"></div>
                                                </div>
                                                <div class="shipping">
                                                    <p> Shipping </p>
                                                    <div class="ro-shipping-method">
                                                        <p>
                                                            Giao hàng miễn phí (Free)
                                                        </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="ro-divide"></div>
                                                </div>
                                                <div class="order-total">
                                                    <p>
                                                        Total
                                                        <span>
                                                            <strong>
                                                                <span class="amount"></span>
                                                            </strong>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p>
                                                        Tổng Đơn Hàng
                                                        <span>
                                                            <strong>
                                                                <span class="amount">span> VNĐ</span></span>
                                                            </strong>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>

</script>

<hr class="opacity-20">
<?php require_once('Layout/footer.php'); ?>