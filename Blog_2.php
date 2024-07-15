
<?php 
 include("Layout/header.php");
?>
<!-- pages-title-start -->
<section class="contact-img-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="con-text">
                                <h2 class="page-title">Blog</h2>
                                <p><a href="#">Home</a> | PoloBee</p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<body>
    
<h2><i class="fas fa-star"></i>Giới thiệu về Áo Polo của PoloBee</h2>
<h5>Tại PoloBee, chúng tôi tự hào mang đến những chiếc áo polo chất lượng cao, kết hợp giữa phong cách và sự thoải mái!</h5></br>
<div class="image">
    <img src="images/Blog/1.jpg" />
</div>
<h5>Áo polo của chúng tôi được chế tác tỉ mỉ từ các loại vải cao cấp, đảm bảo độ bền và cảm giác sang trọng. </h5></br>
<h5>Vải Cao Cấp: Áo polo của chúng tôi được làm từ sự kết hợp giữa cotton và các chất liệu cao cấp khác, mang lại sự mềm mại và thoáng khí.</h5></br>
<h5>Thiết Kế Thanh Lịch: Với nhiều kiểu dáng từ cổ điển đến hiện đại, áo polo PoloBee mang đến sự lựa chọn đa dạng cho mọi gu thẩm mỹ. Đường nét tinh tế và đường may tỉ mỉ thể hiện cam kết về chất lượng của chúng tôi.</h5></br>
<div class="image">
    <img src="images/Blog/2.jpg" />
</div>
<h5>Vẻ Đẹp Đơn Giản và Sự Tinh Tế của Áo Polo PoloBee</h5></br>
<h5> Áo polo của chúng tôi có thể dễ dàng kết hợp với nhiều loại trang phục khác nhau, từ quần âu, quần jean đến quần short, giúp bạn luôn tự tin và phong cách ở bất kỳ đâu.</h5></br>
<h5> PoloBee cung cấp nhiều lựa chọn về màu sắc, từ những gam màu trung tính đến những tông màu nổi bật, phù hợp với mọi phong cách và sở thích cá nhân.</h5></br>
<div class="image">
    <img src="images/banner/i5.jpg" />
</div>
<h5>Đây được xem là cách phối đồ cơ bản và dễ áp dụng nhất, set đồ này phù hợp với nhiều hoàn cảnh và mang đến sự thoải mái nhưng không kém phần khỏe khoắn. Đừng ngại mix thêm một đôi hype hay chunky sneakers nữa để có một outfit ‘chuẩn’ streetwear nha!</h5></br>
<div class="image">
    <img src="images/banner/i1.jpg" />
</div>
<h5>Bật mí là bạn có thể tham khảo mẫu quần mới nhất của PoloBee <a href="#">tại đây</a></h5></br>
<h5>Đây chắc chắn sẽ là set đồ hoàn hảo cho những dịp gặp mặt trong thời tiết cuối năm.</h5></br>
<h5>Đây sẽ là lựa chọn thích hợp cho các bạn nam</h5></br>
<div class="image">
    <img src="images/banner/i3.jpg" />
</div>


<!--------------------------------BÀI VIẾT LIÊN QUAN---------------------- -->
<hr  width="35.6%" align="center" /><!--đường kẻ ngăn cách giữa bài viết liên quan với ảnh trên -->
<h1>BÀI VIẾT LIÊN QUAN</h1>

<ul id="list-new">
    <div class="item"><!--sản phẩm 1 -->
        <img src="images/banner/i6.webp"width="345" height="345"  alt="">                   
        <div class="name">POLOBEE STORE</div>
        <div class="name">ĐẬM CHẤT THỜI TRANG</div>
    </div>
    <div class="box-left" >
        <a href="Blog_2.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>   
    <div class="item"><!--sản phẩm 1 -->
        <img src="images/logo.png"width="345" height="345"  alt="">                   
        <div class="name">THÔNG TIN CHƯƠNG TRÌNH </div>
        <div class="name">THẺ THÀNH VIÊN POLOBEE</div>
    </div>
    <div class="box-left" >
        <a href="Blog_3.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>       
</ul>
<hr class="opacity-20">
</body>
<?php 
include("Layout/footer.php"); 
?>
<style>
        *{
    margin: 0;
    padding: 0;
}
i{/*  chỉnh icon ngôi sao */
    font-size:16px;
    text-align: center;
    padding-right: 10px;
}

h2{/*  chỉnh ô chứa chữ H2 */
text-align: center;
font-size:23px; 
padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
padding-right:343px;
padding-bottom:70px;
padding-top:100px;
}

h5{/*  chỉnh ô chứa chữ H5 */
    text-align: left;
    font-size:16px; 
    font-weight: 50;
    padding-left:340px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-top:10px;
    padding-bottom:18px;


    }

h6{/*  chỉnh ô chứa chữ H6 */
    text-align: left;
    font-size:17.5px; 
    font-weight: 600;
    text-decoration: underline;
    padding-left:355px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:10px;
    margin-top:-10px;/*  chỉnh khoảng cách so với chữ bên trên */
}
.image{/*  chỉnh ảnh trong mục body */
    align-items: center;
    text-align: center;
}



/*-----------------BÀI VIẾT LIÊN QUAN--------------------------*/


hr{/*  chỉnh thanh kẻ giữa bài viết liên quan với ảnh trên */
    margin-top:70px;/*  chỉnh khoảng cách so với chữ bên trên */padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    margin-left:313px;
}
h1{/*  chỉnh ô chứa chữ H1 */
    text-align: left;
    font-size:16px; 
    font-weight: 550;
    padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:18px;
    margin-top:15px;/*  chỉnh khoảng cách so với chữ bên trên */
}
#list-new {/*  chỉnh ảnh bài viết liên quan */
    font-size:10px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    padding-left:190px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:317px;
    margin-top:40px;

}

#list-new .item .name {/*  chỉnh chữ bài viết liên quan */
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


#list-new .box-left{
    text-align: center;
    margin-top:435px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-490px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:12px;/*chỉnh size chữ*/
    width: 80px;/*chỉnh size dài bóng đen*/
    height: 30px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}
</style>