<?php get_header(); ?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa thông tin khách hàng</h3>
                    <a href="?modules=customers&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">

                    <?php if(!empty($data)) foreach ($data as $value) {?>
                    <form method="post" action="?modules=customers&controllers=index&action=update&id=<?php echo $value['id'] ;?>" enctype="multipart/form-data">
                        <label for="cus_name">Họ và tên</label>
                        <input type="text" name="fullname" id="cus_name" value="<?php echo $value['fullname']; ?>">
                        <label for="cus_mail">Email</label>
                        <input type="text" name="mail" id="cus_mail" value="<?php echo $value['mail']; ?>">
                        <label for="cus_phone">Số điện thoại </label>
                        <input type="text" name="phone" id="cus_phone" value="<?php echo $value['phone']; ?>">
                        <label for="cus_address">Địa chỉ</label>
                        <input type="text" name="address" id="cus_address" value="<?php echo $value['address']; ?>">
                        <input type="submit" name="btn_submit" id="btn-submit" value="Cập nhật" style="height: 40px;
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;">
                    </form>
                    <?php };?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>