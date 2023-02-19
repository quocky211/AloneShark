<?php get_header(); ?>
				<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="customer-info-wp" >
            <div class="section-head">
                <h1 class="section-title">Đóng Góp ý kiến của khách hàng</h1>
            </div>
            <div class="section-detail">
                <form method="POST" action="" name="form-checkout">
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="fullname">Họ tên</label>
                            <input type="text" name="fullname" id="fullname">
                        </div>
                        <div class="form-col fl-right">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address">
                        </div>
                        <div class="form-col fl-right">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Nội dung</label>
                            <textarea name="note"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="btn_submit_crate" id="btn-submit" value="Gửi" style="height: 40px;
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                color: green;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;">
                </form>
            </div>
        </div>
        <div class="section" id="order-review-wp">
            <div class="section-head">
                <h1 class="section-title">Thông tin liên hệ</h1>
            </div>
            <div class="map">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=UIT&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                        <a href="https://formatjson.org/">format json</a>
                    </div>
                    <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}
                            .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}
                            .gmap_iframe {height:400px!important;}
                    </style>
                </div>
            </div>

            <div class="section-detail">
                <table class="shop-table">
                    <thead>
                        <tr>
                            <td>ALONE SHARKS Inc.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart-item">
                            <td class="product-name"><strong class="product-quantity">ĐH Công nghệ Thông tin</strong></td>
                        </tr>
                        <tr class="cart-item">
                            <td class="product-name"><b>Phone:</b> 0853.606.008 <strong class="product-quantity"></strong></td>
                        <tr class="order-total">
                            <td><strong class="total-price">Email:</strong> alonesharkshop@gmail.com</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td><strong class="total-price">Mạng xã hội</strong></td>
                        </tr>
                        <tr class="order-total">
                        	<td>
                        		<strong class="total-price">
                        			<ul>
										<li style="display: inline-block; padding: 0px 20px; font-size: 50px;">
											<a style="color:gray;" href="https://www.facebook.com/MetaVietnam/"><i class="fa fa-facebook"></i></a>
										</li >
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>
										</li>
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="https://www.google.com.vn/?hl=vi"><i class="fa fa-google-plus"></i></a>
										</li>
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="https://www.youtube.com/"><i  class="fa fa-youtube"></i></a>
										</li>
									</ul>
                        		</strong>
                        	</td>
                           	
                        </tr>
                       
                    </tfoot>
                </table>
                
            </div>
        </div>
    </div>
</div>	
<?php get_footer(); ?>