<?php get_header(); ?>
<?php 

    if(!empty($_SESSION['success'])) 
        {echo " <script type='text/javascript'> alert('Chúc mừng bạn đã đặt hàng thành công!!!');</script>";
        unset($_SESSION['success']);}

 ?>
<div id="main-content-wp" class="cart-page" style="padding-bottom: 500px;">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thông tin tài khoản</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Thông tin tài khoản -->
        <div id="content" class="wp-inner">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?modules=users&controller=index&action=update">
                        <div class="section" id="customer-info-wp">
                            <div class="section-head">
                                <h1 class="section-title">Thông tin khách hàng</h1>
                            </div>
                            <div class="section-detail">
                                <?php if(!empty($data)) { foreach ($data as  $value) {?>
                                    <div class="form-row clearfix">
                                        <div class="form-col fl-left">
                                            <label for="username">Tên đăng nhập</label>
                                            <input type="text" name="username" id="username" value="<?php echo $value['username']; ?>">
                                        </div>
                                        <div class="form-col fl-right">
                                            <label for="fullname">Họ tên</label>
                                            <input type="text" name="fullname" id="fullname" value="<?php echo $value['fullname']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row clearfix">
                                        <div class="form-col fl-left">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" value="<?php echo $value['mail']; ?>">
                                        </div>
                                        <div class="form-col fl-right">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="tel" name="phone" id="phone" value="<?php echo $value['phone']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row clearfix">
                                        <div class="form-col fl-left">
                                            <label for="address">Địa chỉ</label>
                                            <input type="text" name="address" id="address" value="<?php echo $value['address']; ?>">
                                        </div>
                                    </div>
                                    <button type="submit" name="btn_submit" id="btn-submit">Cập nhật</button>
                                <?php }};?>                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>

<?php get_footer(); ?>