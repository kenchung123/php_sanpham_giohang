<?php
	include_once "./common/connection.php";
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = "SELECT * FROM product WHERE id ='$id'";
		$resutl = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($resutl)) 
		{
			$output = ' 
				<div class="modal fade" id="productModal" tabindex="-1" role="dialog" style="overflow-y: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button style="outline: 0" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-product clearfix">
                    <div class="product-images">
                        <div class="main-image shadow">
                            <img src="<?php echo $row['img_slider']	?>" alt="">
                        </div>
                        <div class="social-sharing">
                            <div class="widget widget_socialsharing_widget pt-4">
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a class="facebook" href="#" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" href="#" target="_blank" title="Google +">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rss" href="#" target="_blank" title="RSS">
                                            <i class="fas fa-rss"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="product-info">
                        <h1>Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU</h1>
                        <div class="price-box-3">
                            <div class="s-price-box">
                                <span class="new-price">8290000 </span>
                                <span class="old-price">1150000</span>
                            </div>
                        </div>
                        <a href="#" class="see-all">Xem tất cả tính năng</a>
                        <div class="quick-add-to-cart">
                            <form method="post" class="cart">
                                <div class="numbers-row">
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" min="1" name="sl" max="1000" step="1" value="1">
                                    </div>
                                </div>
                                <button class="single_add_to_cart_button ml-5" type="submit">Thêm vào giỏ</button>
                            </form>
                        </div>
                        <div class="quick-desc">
                            Máy lọc nước Kangaroo Hydrogen KG100HC 10 lõi vỏ tủ VTU trụ tròn đen Sự kết hợp hoàn hảo giữa phong cách thiết kế Châu Âu với quan niệm phong thủy Á Đông tạo nên một kiệt tác về thiết kế, một nét chấm phá đặc sắc trong không gian thiết ...
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			';
		}
		echo $output;
	}
?>